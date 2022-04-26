@extends('layouts.layout')
@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <div class="invisible md:invisible">{{ $Total = 0 }}</div>

    <style>
        @media only screen and (max-width: 3840px) and (min-width: 1280px) {
            .test {
                width: 100%;
                position: absolute;
                bottom: 0;
            }
        }

    </style>

    <section class="bg-white mt-24 py-10 lg:py-[120px]">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-2">
                    <div class="max-w-full overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-gradient-to-r from-gray-500 to-pink-600 text-center">
                                    <th
                                        class="w-1/6 min-w-[160px] text-lg font-semibold text-white
                                    py-2 lg:py-5 px-3 lg:px-4 border-l border-transparent">
                                        Orden Número
                                    </th>
                                    <th
                                        class=" w-1/6 min-w-[160px] text-lg font-semibold text-white
                                    py-2 lg:py-5 px-3 lg:px-4 ">
                                        Cliente
                                    </th>
                                    <th
                                        class=" w-1/6 min-w-[160px] text-lg font-semibold text-white
                                    py-2 lg:py-5 px-3 lg:px-4 ">
                                        Fecha
                                    </th>
                                    <th
                                        class=" w-1/6 min-w-[160px] text-lg font-semibold text-white
                                    py-2 lg:py-5 px-3 lg:px-4 ">
                                        Producto
                                    </th>
                                    <th
                                        class=" w-1/6 min-w-[160px] text-lg font-semibold text-white
                                    py-2 lg:py-5 px-3 lg:px-4 ">
                                        Precio
                                    </th>
                                    <th
                                        class=" w-1/6 min-w-[160px] text-lg font-semibold
                                    text-white py-2 lg:py-5 px-3 lg:px-4 ">
                                        Cantidad
                                    </th>
                                    <th
                                        class=" w-1/6 min-w-[160px] text-lg font-semibold text-white
                                    py-2 lg:py-5 px-3 lg:px-4 ">
                                        SubTotal
                                    </th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($orders as $order)
                                    <tr>
                                        <td
                                            class=" text-center text-dark font-medium text-base py-3
                                        px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">
                                            {{ $order->order->id }}
                                        </td>

                                        <td
                                            class=" text-center text-dark font-medium text-base
                                    py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                            {{ $user->user->name }}

                                        </td>

                                        <td
                                            class=" text-center text-dark font-medium text-base
                                    py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                            {{ $order->created_at }}

                                        </td>

                                        <td
                                            class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                            {{ $order->product->name }}
                                        </td>

                                        <td
                                            class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                            {{ $order->product->price }}
                                        </td>


                                        <td
                                            class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-[#F3F6FF] border-b border-[#E8E8E8]">
                                            {{ $order->quantity }}
                                        </td>

                                        <td
                                            class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                            {{ $subTotal = $order->quantity * $order->product->price }}

                                        </td>
                                        <div class="invisible md:invisible"> {{ $Total = $Total + $subTotal }}</div>

                                    </tr>
                                @endforeach
                                <tr>
                                    <td
                                        class="text-center text-dark font-extrabold text-base
                                    py-4 px-2 bg-gray-200 border-b border-[#E8E8E8]">
                                        Total:
                                    </td>

                                    <td
                                        class="text-center text-dark font-medium text-base
                                    py-4 px-2 bg-gray-300 border-b border-[#E8E8E8]">
                                        {{ $Total }}

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
