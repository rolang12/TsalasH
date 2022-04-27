@extends('layouts.layout')

@section('content')
    <!--Card-->

    <livewire:messages.success-product />

    <div class="grid grid-cols-2 mt-24 -mb-16 items-center ">
        <div class="flex md:w-auto w-screen">
            <h2 class="text-3xl font-bold px-3 ml-6"> Tabla de Ordenes</h2>
        </div>

        <div class="flex justify-end  md:col-span-1 col-span-2 justify-end mx-auto md:mx-0">

            <a href="{{ route('orders.orders-resume') }} ">
                <div class="p-3 text-center rounded-sm bg-black mr-5 md:mr-0 mt-8 font-bold text-white w-48">Ver Reporte del
                    Día
                </div>
            </a>


        </div>

    </div>

    <div id='recipients' class="p-10 mt-24 lg:mt-28 rounded shadow ">

        <table id="example" class="stripe hover p-4 " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">

            <thead>

                <tr class="bg-black p-5 text-white ">

                    <th data-priority="1">ID</th>
                    <th class="text-left" data-priority="2">Usuario</th>
                    <th class="text-left" data-priority="2">Hora Pedido</th>
                    <th class="text-left" data-priority="3">Estado</th>
                    <th class="text-left" data-priority="4">Lugar</th>
                    <th data-priority="6">Ver</th>
                    <th data-priority="7">Editar</th>
                    <th data-priority="8">Eliminar</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($orders as $order)
                    <tr>

                        <td class="text-center  ">{{ $order->id }}</td>
                        <td class="text-left  ">{{ $order->users_id }}</td>
                        <td class="text-left  ">{{ $order->created_at }}</td>
                        <td class="text-left  ">{{ $order->status }}</td>
                        <td class="text-left  ">{{ $order->place }}</td>

                        <td class="text-center hover-text-green-600 text-green-300"><a
                                href="{{ route('orders.crud.show-order', ['id' => $order->id], Crypt::encrypt($order->id)) }}">
                                <button><i class="far fa-eye"></i></button>
                        </td>

                        <td class="text-center hover-text-blue-600 text-blue-300 "><a
                                href="{{ route('orders.crud.edit', Crypt::encrypt($order->id)) }}">
                                <button><i class="far  fa-edit"></i></button></a>
                        </td>

                        <td class="text-center hover-text-red-600 font-bold "><a
                                href="{{ route('orders.crud.destroy', Crypt::encrypt($order->id)) }}">
                                <button onclick=" return confirmDelete() "><i
                                        class="fas text-red-600 fa-trash"></i></button>
                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>



    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });


        function confirmDelete() {
            var respuesta = confirm("¿Estás seguro de que quieres eliminar esta orden?");

            if (respuesta) {
                return true
            } else {

                return false
            }
        }
    </script>
@endsection
