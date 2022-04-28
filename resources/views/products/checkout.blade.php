@extends('layouts.layout')

@section('title', 'Carrito')

@section('content')
    @auth

        {{-- Esta es la factura que aun se pueden eliminar productos antes de enviarlo --}}
        <!-- ====== Table Section Start -->
        <livewire:messages.success-product />

        @if (count(Cart::getContent()))
            <section class="bg-white  mt-24 py-20 lg:py-[120px]">
                <div class="container">
                    <div class="text-2xl mb-3 text-black font-semibold">Carrito de Compras</div>
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full px-2">
                            <div class="max-w-full overflow-x-auto">
                                <table class="table-auto w-full">
                                    <thead>
                                        <tr class="bg-gradient-to-r from-gray-500 to-pink-600 text-center">

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
                                            <th
                                                class=" w-1/6 min-w-[160px] text-lg font-semibold text-white
                                    py-2 lg:py-5 px-3 lg:px-4 border-r border-transparent ">
                                                Eliminar
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach (Cart::getContent() as $item)
                                            <tr>


                                                <td
                                                    class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                                    {{ $item->name }}


                                                    @if ($item->sabores != null)
                                                        <div class="font-light text-sm">Sabores:{{ $item->sabores }}</div>
                                                    @endif
                                                </td>

                                                <td
                                                    class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-[#F3F6FF] border-b border-[#E8E8E8]">
                                                    ${{ number_format($item->price, 2) }}
                                                </td>

                                                <td
                                                    class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                                    {{ $item->quantity }}
                                                </td>

                                                <td
                                                    class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                                    ${{ number_format($subTotal = $item->quantity * $item->price, 2) }}

                                                </td>
                                                <td
                                                    class=" text-center text-white font-medium text-base py-2 bg-red-500 hover:bg-red-700 hover:text-white ">

                                                    <button class=" py-2 ">
                                                        <form action="{{ route('cart.cart-removeitem') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                                            <button type="submit" class=""> Eliminar </button>
                                                        </form>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td
                                                class="text-center text-dark font-extrabold text-base
                                    py-4 px-2 bg-gray-200 border-b border-[#E8E8E8]">
                                                Total:
                                            </td>

                                            <td
                                                class="text-center text-dark font-bold text-base
                                    py-4 px-2 bg-gray-300 border-b border-[#E8E8E8]">
                                                ${{ number_format(Cart::getTotal(), 2) }}

                                            </td>
                                        </tr>


                                    </tbody>

                                </table>



                            </div>
                        </div>
                    </div>
                </div>
            </section>



            {{ Form::open(['route' => 'orders.crud.store', 'class' => 'text-center pb-28']) }}

            {!! Form::hidden('users_id', Auth::user()->id) !!}
            {!! Form::hidden('status', 'enviado') !!}
            {!! Form::hidden('total', Cart::getTotal()) !!}
            {!! Form::submit('Enviar', ['class' => ' text-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-4 bg-gradient-to-r from-pink-500  via-purple-400 to-blue-500 font-bold w-44 my-2 rounded-md text-center text-white  ']) !!}
            {!! Form::close() !!}
        @else
            <div
                class="my-44 py-16 rounded-lg w-1/2 text-center mx-auto border-2 border-red-600 font-semibold lg:text-7xl sm:text-6xl  ">
                Carrito Vacío :( </div>
        @endif
        <style>
            @media only screen and (max-width: 3840px) and (min-width: 1920px) {
                .test {
                    width: 100%;
                    position: absolute;
                    bottom: 0;
                }
            }

        </style>

    @endauth

    <!-- ====== Table Section End -->
@endsection
