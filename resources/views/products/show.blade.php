@extends('layouts.layout')

@section('content')

<img  alt="" class="w-max" />
<livewire:messages.success-product/>

@if (count(Cart::getContent()))

    <div class="fixed right-0 text-xl bottom-12 bg-gradient-to-r from-cyan-400 to-pink-400 py-4 px-5  z-50 rounded-lg text-white font-bold animate-pulse duration-300 hover:-translate-x-6 ">
        <a  href="{{route('cart.cart.checkout')}}">
            Ver
            <svg class="w-8 h-8 inline-block  " xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 576 512"> @fontawesome <path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/>
            </svg>
        </a>
    </div>

@endif

<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img  class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('/storage/images/'.$product->file)}}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">Categoría: {{$product->category->name}}</h2>
          <h1 class="text-gray-900 text-3xl title-font font-principal font-medium mb-1">{{$product->name}}</h1>
          <div class="flex mb-4 ">
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 " viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="text-gray-500 px-2">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 " viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>

          <p class="leading-relaxed">Descripción:  {{$product->description}}</p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">

          </div>
          
            <div class="grid grid-row-2  ">

              <div class="title-font font-medium text-2xl text-gray-900">Precio: ${{$product->price}}</div>

              <!-- Si el producto no es de categoria helado se llama la vista sin opcion de sabores -->
              @if ($product->categories_id != 1)
              
                @livewire('products.order-single', ['product' => $product], key($product->id))
            </div>
            @else
              
              @if ($product->id == 6)
              
                @livewire('sabors.saboruno', ['product' => $product], key($product->id))
                
                @elseif ($product->id == 3 || $product->id == 4)

                  @livewire('sabors.sabor-dos', ['product' => $product], key($product->id))

                @elseif ($product->id == 1 || $product->id == 5 || $product->id == 7 || $product->id == 8 )

                  @livewire('sabors.sabor-tres', ['product' => $product], key($product->id))

                @elseif ($product->id == 2)

                  @livewire('sabors.sabor-cua', ['product' => $product], key($product->id))

              @endif

            @endif
            
          
        </div>
      </div>
    </div>
  </section>

  @endsection