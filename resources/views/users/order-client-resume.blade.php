 {{-- {{dd($orders)}}  --}}
@extends('layouts.layout')

@section('content')
    
{{-- Esta es la factura final final --}}
    
<div class="invisible" > {{$total = 0}}</div>
    {{dd($orders)}}

<div>
    <h2 class="ml-20 font-semibold text-4xl text-left mt-28 " >Datos del Pedido:</h2>
    
    <div class="invisible" >
        
    </div>
    
    <table class="ml-16 py-3   " >
        <tr >
            <td class="px-6 py-2 font-semibold" >Fecha:</td> <td> {{ $fechaActual = date ( 'd-m-Y H:i:s' )}} </td> 
        </tr>
        <tr>
            <td class="px-6 py-2 font-semibold" >ID Pedido:</td> <td>id</td> 
        </tr>
        <tr>
            <td class="px-6 py-2 font-semibold" >Nombre:</td> <td> {{ Auth::user()->name." ".Auth::user()->last_name }} </td> 
        </tr>
        <tr>
            <td class="px-6 py-2 font-semibold" >Telefono:</td> <td> {{Auth::user()->phone}}</td> 
        </tr>
        <tr>
            <td class="px-6 py-2 font-semibold" >Dirección:</td> <td>  {{Auth::user()->address}}</td> 
        </tr>
    </table>
     
    <div class="ml-16 mb-8 flex ">

        <div class="flex flex-col">

            <div class="w-full">
                
                <table wire.init="loadUsers" >
                    
                    <thead class="bg-white text-base py-2 text-black ">
                        <tr class="text-left" >
                            
                            <th class="px-6 py-2 ">
                                Producto
                            </th>
                            <th class="px-6 py-2 ">
                                Sabor
                            </th>
                            <th class="px-6 py-2 ">
                                Precio
                            </th>
                            <th class="px-6 py-2 " >
                                Cantidad
                            </th>
                            <th class="px-6 py-2 " >
                                Sub-Total
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ( $orders as $order )
                           
                            <tr class="whitespace-nowrap  ">

                                <td class="px-6 py-4 text-sm ">
                                    {{$order->product->name}}
                                </td>

                                <td class="px-6 py-4 text-sm ">
                                    {{$order->sabor_selected}}
                                </td>

                                <td class="px-6 py-4 text-sm  ">
                                    {{$order->product->price}}
                                </td>

                                <td class="px-6 py-4 text-sm ">
                                    {{$order->quantity}}
                                </td>

                                <td class="px-6 py-4 text-sm ">
                                    {{$subTotal = $order->quantity*$order->product->price}}
                                </td>


                                <div class="invisible" >{{$total = $total +  $subTotal}}  </div> 
                                
                            </tr>
                        @endforeach  
                        
                            <tr class="border-t border-gray-400 " >
                                <td></td><td></td><td class="font-bold px-6 py-4 " >Total</td><td class="px-6 py-4" >${{$total}}</td>            
                            </tr>    

                    </tbody>

                </table>
        
            </div>
        </div>
    </div>

</div>

@endsection