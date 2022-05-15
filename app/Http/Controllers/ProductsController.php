<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Crypt;

class ProductsController extends Controller
{
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        // dd($request);
        if ($data = $request->validated()){
            
            $product = new Product();
            $destination_path = ('public/images/');
            $image = $request->file('media');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('media')->storeAs($destination_path, $image_name);
            $product->file = $image_name;

            $product->name         = $request->name;
            $product->price        = $request->price;
            $product->stock_min    = $request->stock_min;
            $product->description     = $request->description;
            $product->categories_id     = $request->categories_id;
            $product->save();

            return redirect()->route('products.crud.show')->with('status','Producto agregado Satisfactoriamente!');
            

        }

        return redirect()->back()->withErrors($request);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function show(Product $product)
    {
        $products = Product::with('category')
        ->get(['id','name','price','stock_min','categories_id']);

        return view('products.crud-products', compact('products'));
    }

    public function showProduct($name)
    {

        $product   = Product::with('category')
        ->where('name', $name)
        ->first();
                
        return view('products.show', compact('product'));

    }

    public function showAdminProduct($id)
    {
        $id = decrypt($id);

        $product   = Product::with('category')
        ->where('id', $id)
        ->first();
                
        return view('products.show-admin', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $id     = Crypt::decrypt($id);
        $product   = Product::findOrFail($id);
        
        return view('products.update', compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product = Product::find($request->id);
        $product->name         = $request->name;
        $product->price        = $request->price;
        $product->stock_min    = $request->stock_min;
        $product->description     = $request->description;
        $destination_path = 'public/images/';

        if ($request->file('media') != null) {

            $image = $request->file('media');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('media')->storeAs($destination_path, $image_name);
            $product['file'] = $image_name;
          
        }

         $product->save();

        return redirect()->route('products.crud.show')->with('status','Producto actualizado Exitosamente!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        $id = Crypt::decrypt($id);
        Product::findOrFail($id)->delete();

        return redirect()->back()->with('status','Comentario borrado Exitosamente!');
    
    }
}
