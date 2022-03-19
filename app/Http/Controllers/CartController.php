<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\Sabor;
// use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Cart;
use Darryldecode\Cart\Cart as CartCart;
use Darryldecode\Cart\Validators\Validator;

class CartController extends Controller
{
    
    public function add(Request $request) {

        
        if ($request->quantity == 0) {
            return back()->with('status',"La cantidad debe ser mayor a 0!");
        }
  
        $product = Product::find($request->id);
        
        if ($request->quantity > $product->stock_min) {
            return back()->with('status',"Has pedido una cantidad incorrecta");
        }

        $product->quantity = $request->quantity;
        $product->price = $request->price;

        /* Insertando los sabores */
        $data = array();
        $sabores = implode(", ", $request->sabores);
    
        $data['sabor_selected'] = $sabores;
       
        Cart::add(
            $product->id,
            $product->name,
            $product->price,
            $product->quantity,
            $product->sabores = $data['sabor_selected'],
        );

        return back()->with('status',"$product->name Se ha agregado al carrito" );

    }

    public function cart() {

        $params = [
            
            'title' => 'Shopping Cart Checkout',
        ];

        return view('products.checkout')->with($params);

    }

    public function removeitem(Request $request) {
        
        Cart::remove([
            'id' => $request->id,
        ]);
        return back()->with('status','El producto se ha eliminado del carrito');
    }

    public function clear() {
        
        Cart::clear();
        return view('dashboard')->with('status', 'Su pedido se ha enviado exitosamente!');

    }
}

