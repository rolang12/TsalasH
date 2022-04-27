@extends('layouts.layout')

@section('title', 'Productos')

@section('content')
    <livewire:messages.success-product />

    <div class="grid md:grid-cols-2 sm:grid-cols-1 mt-20 -mb-16 items-center">
        <div class="md:w-auto w-screen">
            <h2 class="text-3xl font-bold px-3 sm:ml-6 ">Tabla de Productos</h2>
        </div>
        <div class="flex md:justify-end justify-center  md:mr-6 md:mt-36 sm:mt-16"><a
                href="{{ route('products.crud.create') }} ">
                <div
                    class="md:p-3 p-2 md:text-base md:ml-0  ml-4 text-sm text-center rounded-sm bg-black ml-5 mt-5 font-bold text-white w-40">
                    Crear Producto </div>
            </a><a href="{{ route('sabors.sabors') }}">
                <div
                    class="md:p-3 p-2 md:text-base md:mr-0  mr-2 text-sm  text-center rounded-sm bg-black ml-5 mt-5 mb-8 font-bold text-white w-40">
                    Editar Sabores </div>
            </a></div>
    </div>
    <!--Table-->
    <div id='recipients' class="p-10 md:mt-36 mt-5 lg:mt-20 rounded md:mb-12 ">
        <table id="example" class="stripe hover p-4 " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr class="bg-black p-5 text-white ">
                    <th data-priority="1">Id</th>
                    <th class="text-left" data-priority="2">Nombre</th>
                    <th class="text-left" data-priority="3">Precio</th>
                    <th data-priority="4">Stock</th>
                    <th data-priority="5">Categoría</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="text-center  ">{{ $product->id }}</td>
                        <td class="text-left  ">{{ $product->name }}</td>
                        <td class="text-left  ">{{ $product->price }}</td>
                        <td class="text-center  ">{{ $product->stock_min }}</td>
                        <td class="text-center  ">{{ $product->category->name }}</td>
                        <td class="text-center hover-text-blue-600 text-blue-300 "><a
                                href="{{ route('products.crud.edit', Crypt::encrypt($product->id)) }}">
                                <button><i class="far  fa-edit"></i></button></a></td>
                        <td class="text-center hover-text-red-600 font-bold "><a
                                href="{{ route('products.crud.destroy', Crypt::encrypt($product->id)) }}">
                                <button onclick=" return confirmDelete() ">
                                    <i class="fas text-red-600 fa-trash"></i>
                                </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- jQuery -->
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });


        function confirmDelete() {
            var respuesta = confirm("¿Estás seguro de que quieres eliminar este producto?");

            if (respuesta) {
                return true
            } else {

                return false
            }
        }
    </script>
@endsection
