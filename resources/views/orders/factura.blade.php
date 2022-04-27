@extends('layouts.layout')

@section('title', 'Factura')

@section('content')

    <div class="flex items-center bg-gray-100 text-black text-sm font-bold px-4 py-3 ml-4" role="alert">
        <a class="ml-2" href="{{ route('cart.cart-clear') }}">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><i
                    class="fa-solid fa-house-user"></i> </svg>
            Inicio</a>
    </div>

    <!-- component -->
    <section class="bg-gray-100 py-20">
        <div class="max-w-2xl mx-auto py-0 md:py-16">
            <article class="shadow-none md:shadow-md md:rounded-md overflow-hidden">
                <div class="md:rounded-b-md  bg-white">
                    <div class="p-9 border-b border-gray-200">
                        <div class="space-y-6">
                            <div class="flex justify-between items-top">
                                <div class="space-y-4">
                                    <div>
                                        <img class="h-6 object-cover mb-4"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuBQzd2ekKyN3vuNiyPWpYetpyC_tRF1ZfAA&usqp=CAU">
                                        <p class="font-bold text-lg"> Factura de venta </p>
                                        <p> TsalasH - Delicias del Parque </p>
                                    </div>
                                    <div>
                                        <p class="font-medium text-sm text-gray-400"> Comprador </p>
                                        <p> {{ Auth::user()->name }} </p>
                                        <p> {{ Auth::user()->email }} </p>
                                        <p> (+57) 3225454886 </p>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div>
                                        <a
                                            class="inline-flex items-center text-sm font-medium text-blue-500 hover:opacity-75 ">
                                            Download PDF <svg class="ml-0.5 h-4 w-4 fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                                                </path>
                                                <path
                                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-9 border-b border-gray-200">
                        <p class="font-medium text-sm text-gray-400"> Nota </p>
                        <p class="text-sm"> Gracias por comprar en TsalasH - Delicias del Parque</p>
                    </div>
                    <table class="w-full divide-y divide-gray-200 text-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="px-9 py-4 text-left font-semibold text-gray-400"> Producto </th>
                                <th scope="col" class="py-3 text-left font-semibold text-gray-400"> </th>
                                <th scope="col" class="py-3 text-left font-semibold text-gray-400"> Precio U/N</th>
                                <th scope="col" class="py-3 text-left font-semibold text-gray-400"> Cantidad </th>
                                <th scope="col" class="py-3 text-left font-semibold text-gray-400"> Descuento </th>
                                <th scope="col" class="py-3 text-left font-semibold text-gray-400"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach (Cart::getContent() as $item)
                                <tr>
                                    <td class="px-9 py-5 whitespace-nowrap space-x-1 flex items-center">
                                        <div>
                                            <p> {{ $item->name }} </p>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap text-gray-600 truncate"></td>
                                    <td class="whitespace-nowrap text-gray-600 truncate">$ {{ $item->price }} USD</td>
                                    <td class="whitespace-nowrap text-gray-600 truncate">{{ $item->quantity }} </td>
                                    <td class="whitespace-nowrap text-gray-600 truncate"> 0% </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-9 border-b border-gray-200">
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm"> Total </p>
                                </div>
                                <p class="text-gray-500 text-sm">$ {{ Cart::getTotal() }} COP</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-9 border-b border-gray-200">
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <div>
                                    <p class="font-bold text-black text-lg"> Total </p>
                                </div>
                                <p class="font-bold text-black text-lg">$ {{ Cart::getTotal() }} COP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

@endsection
