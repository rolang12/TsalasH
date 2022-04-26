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
            return back()->withErrors("Has pedido una cantidad incorrecta, stock máximo alcanzado.");
        }

        $product->quantity = $request->quantity;
        $product->price = $request->price;
        

        /* Insertando los sabores */

        if ($request->sabores == null)
        {
            $data = array();
            $sabores = implode(", ", [$request->sabores]);
            $data['sabor_selected'] = $sabores;
            $sabor = Sabor::create($data);
                    
        } else {
            $data = array();
            $sabores = implode(", ", $request->sabores);
            $data['sabor_selected'] = $sabores;
            $sabor = Sabor::create($data);
                
        }

        $product->sabores = $data['sabor_selected'];
        
        // Aqui genero un id unico para cada producto, para que no me actualice 
        //el mismo producto y pueda enviarlos todos diferentes
        //deben hacer una función o consulta que retorne la cantidad por productos iguales
        //ya que al yo modificar lo de enviar producto individual
        //la cantidad no se suma (SOLO A LOS HELADOS) el resto de prodcutos si los actualiza bien, normal
        $product->id_t = random_int(1, 2000);

        Cart::add(

            $product->id,
            $product->id_t,
            $product->name,
            $product->price,
            $product->quantity,
            $product->sabores = $data['sabor_selected'],
        );

        return back()->with('status',"$product->name Se ha agregado al carrito" );

    }

    //esta función retorna al checkout donde están los productos a punto de enviarse
    public function cart() {

       
        return view('products.checkout');

    }

    //aqui se quita un producto individual del carrito
    public function removeitem(Request $request) {
        
        Cart::remove([
            'id' => $request->id,
        ]);
        return back()->with('status','El producto se ha eliminado del carrito');
    }

    //Aqui se limpia el carrito y ya no hay manera de volver a ver los productos pedidos
    
    public function clear() {
        
        Cart::clear();
        return view('dashboard')->with('status', 'Su pedido se ha enviado exitosamente!');

    }
}

