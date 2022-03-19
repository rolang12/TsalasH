@extends('layouts.layout')

@section('content')
    @if (Session::has('status'))
                                                            
        <div class="flex w-1/2 col mt-36 relative text-left max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-emerald-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                </svg>
            </div>
            
            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-emerald-500 dark:text-emerald-400">Acción Completada</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">{{session('status')}}</p>
                </div>
            </div>
        </div>

    @endif

    <!--Card-->
    <div id='recipients' class="p-10 mt-36 lg:mt-28 rounded shadow bg-gray-200">
                    
        <table id="example" class="stripe hover p-4 " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">

            <thead>

                <tr class="bg-black p-5 text-white ">
                    
                    <th data-priority="1">ID</th>
                    <th class="text-left" data-priority="2">Nombre</th>
                    <th class="text-left" data-priority="3">Price</th>
                    <th data-priority="4">Stock</th>
                    <th data-priority="5">Categoría</th>
                    <th data-priority="6">View</th>
                    <th data-priority="7">Edit</th>
                    <th data-priority="8">Delete</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($products as $product)
                
                    <tr>

                        <td class="text-center  ">{{ $product->id }}</td>
                        <td class="text-left  ">{{ $product->name }}</td>
                        <td class="text-left  ">{{ $product->price}}</td>
                        <td class="text-center  ">{{ $product->stock_min }}</td>
                        <td class="text-center  ">{{ $product->category->name }}</td>

                        <td class="text-center hover-text-green-600 text-green-300"><a
                            href="{{ route('products.crud.show-product', Crypt::encrypt($product->id)) }}">
                            <button><i class="far fa-eye"></i></button>
                        </td>

                        <td class="text-center hover-text-blue-600 text-blue-300 "><a
                            href="{{ route('products.crud.edit', Crypt::encrypt($product->id)) }}">
                            <button><i class="far  fa-edit"></i></button></a>
                        </td>

                        <td class="text-center hover-text-red-600 font-bold "><a
                            href="{{ route('products.crud.destroy', Crypt::encrypt($product->id)) }}">
                            <button onclick=" return confirmDelete() "    ><i class="fas text-red-600 fa-trash"></i></button>
                        </td> 

                    </tr>
                @endforeach
                
            </tbody>

        </table>

    </div>
    
    <a href="{{route('products.crud.create')}} ">
        <div class="p-5 bg-green-600 ml-5 mt-5 font-bold text-white w-40" >Crear Producto</div>
    </a>

    <a href="{{route('sabors')}}">
        <div class="p-5 bg-green-600 ml-5 mt-5 font-bold text-white w-40" >Editar Sabores</div>
    </a>
    
    <!-- jQuery -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6628fdf66e.js" crossorigin="anonymous"></script>


   
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });

        
        function confirmDelete()
        {
            var respuesta = confirm("Are you sure that you want delete this post?");

            if (respuesta)
            {
                return true
            } else {

                return false
            }
        }



    </script>
    
@endsection
