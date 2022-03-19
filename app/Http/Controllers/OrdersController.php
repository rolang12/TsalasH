<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Support\Facades\Crypt;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
    
        $order['status'] = $request->status;
        $order['users_id'] = $request->users_id;
        $order = Order::create($order);

        $orderid = $order->id;

        foreach (Cart::getContent() as $item ) {

            $productOrder =  new ProductOrder();
            $productOrder->products_id = $item->id;
            $productOrder->orders_id = $order->id;
            $productOrder->quantity = $item->quantity;
            $productOrder->save();
           
            /* Actualizar el stock del producto */
            $product = Product::where('id', $productOrder->products_id)
            ->first();
            $product->stock_min = $product->stock_min-$productOrder->quantity;
            $product->save();

        }
        
        $product = Cart::clear();
        
        return redirect()->route('orders.orders-client-resume',['orderid' => $orderid]);
        
    }
    
    public function orderClientResume($orderid)
    {
        $orders = ProductOrder::with('product','order', 'order.user')
        ->get()
        ->where('order.users_id', Auth::user()->id )
        ->where('orders_id', $orderid)
        ->sortBy('orders_id');
        

        return view('users.order-client-resume',compact('orders'))->with( 'status', 'Su pedido ha sido enviado exitosamente!');

    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $orders = Order::with('user')
        ->get(['id','created_at','status','place','users_id']);

        return view('orders.crud-orders', compact('orders'));
    }

    public function showOrder(Order $order, $id)
    {

        $user = Order::with('user')
        ->where('id', $id)
        ->first();

        $orders = ProductOrder::with('product','order')
        ->where('orders_id', $id)
        ->get();

      
        return view('orders.show-order', compact('orders','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order, $id)
    {
        $id     = Crypt::decrypt($id);
        $order   = Order::findOrFail($id);
        
        return view('orders.update', compact('order'));
    }

    public function orderResume()
    {

        $ayer = Date::yesterday();
        
        $orders = ProductOrder::with('product','order', 'order.user')
        ->get()
        ->where('created_at', '>', $ayer)
        ->where('order.status','confirmado')
        ->sortBy('orders_id');
        

        // ->only('created_at');
        
        // $hoy = Carbon::today();
       
        // $user = Order::with('user')
        // ->get();
        
        // $hoy = substr($hoy, 0, -9);

        // $orders = DB::table('product_orders')
        // ->join('products','products.id','=','product_orders.products_id')
        // ->join('orders', 'product_orders.orders_id', '=', 'orders.id')
        // ->join('users', 'orders.users_id', '=', 'users.id')
        // ->select('products.*','users.*','orders.*','quantity')
        // ->addSelect('products.name as productName', 'orders.created_at as OrderDate' )
        // ->whereDate('orders.created_at', '=', $hoy)
        // ->get();
            
        return view('orders.orders-resume',compact('orders'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public functionpdate(UpdateOrderRequest $request, Order $order)
    {
        
        $order = Order::fi und($request->id);
        $order->status         = $request->status;
        $order->users_id         = $request->users_id;
        $order->save();
        return redirect()->route('orders.crud.show')->with('status','Orden actualizada Satisfactoriamente!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, $id)
    {
        $id = Crypt::decrypt($id);
        Order::findOrFail($id)->delete();

        return redirect()->back()->with('status','Orden Borrada Satisfactoriamente!');
    }
}
