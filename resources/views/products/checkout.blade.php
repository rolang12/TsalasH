@extends('layouts.layout')

@section('content')
    

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- ====== Table Section Start -->
<livewire:messages.success-product/>
@if (count(Cart::getContent()))
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
                                    ID
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
                                    text-white py-2 lg:py-5 px-3 lg:px-4 " >
                                    Cantidad
                                </th>
                                <th
                                    class=" w-1/6 min-w-[160px] text-lg font-semibold text-white
                                    py-2 lg:py-5 px-3 lg:px-4 " >
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
                                        class=" text-center text-dark font-medium text-base py-3
                                        px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]" >
                                        {{$item->id}}
                                    </td>

                                    <td
                                        class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                        {{$item->name}}
                                    </td>

                                    <td
                                        class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-[#F3F6FF] border-b border-[#E8E8E8]">
                                        {{$item->price}}
                                    </td>

                                    <td
                                        class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                        {{$item->quantity}}
                                    </td>

                                    <td
                                        class=" text-center text-dark font-medium text-base
                                        py-2 px-2 bg-white border-b border-[#E8E8E8]">
                                        {{ $subTotal = $item->quantity*$item->price }}
                                        
                                    </td>
                                    <td class=" text-center text-white font-medium text-base py-2 bg-red-500 hover:bg-red-700 hover:text-white ">
                                        <a href="#" class=" py-2 ">
                                            <form action="{{route('cart.cart.removeitem')}}" method="POST" >
                                                @csrf
                                                <input type="hidden" name="id" value="{{$item->id}}" >
                                                <button type="submit" class="" > Eliminar </button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            
                                @endforeach
                                <tr>
                                    <td class="text-center text-dark font-extrabold text-base
                                    py-4 px-2 bg-gray-200 border-b border-[#E8E8E8]" >
                                        Total:
                                    </td>

                                    <td class="text-center text-dark font-medium text-base
                                    py-4 px-2 bg-gray-300 border-b border-[#E8E8E8]" > 
                                        {{ Cart::getTotal() }}
                                        
                                    </td>
                                </tr>
                            

                            </tbody>

                        </table>

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{ Form::open(['route' => 'orders.crud.store', 'class' => 'text-center  mx-auto ']) }}

    {!! Form::hidden('users_id', Auth::user()->id ) !!}
    {!! Form::hidden('status', 'enviado') !!}
    {!! Form::hidden('total', Cart::getTotal()) !!}
    {!! Form::submit('enviar') !!}
    {!! Form::close() !!}
@else

    <div class="my-44 p-10 rounded-lg w-1/2 text-center mx-auto border-2 border-red-600 font-semibold text-3xl  " > Carrito Vacío :( </div>
    
@endif
    
<!-- ====== Table Section End -->
@endsection