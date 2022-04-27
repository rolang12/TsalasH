@extends('layouts.layout')

@section('content')
    <div class="grid grid-cols-2 mt-28 -mb-20 items-center">

        <div class="flex">
            <h2 class="text-3xl font-bold px-3 "> Resumen del Día</h2>
        </div>


    </div>

    <div class="invisible">{{ $total = 0 }} </div>
    <div id='recipients' class=" p-10  rounded shadow">

        <table id="example" class="stripe hover p-4 " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>

                <tr class="bg-black p-3 text-white ">

                    <th data-priority="1">Cliente</th>
                    <th data-priority="2">ID Orden</th>
                    <th class="text-left">Producto</th>
                    <th data-priority="3">Precio</th>
                    <th data-priority="4">Cantidad</th>
                    <th class="text-center">Precio Total</th>
                </tr>

            </thead>

            <tbody>
                @foreach ($orders as $order)
                    <tr>

                        <td class="text-left  ">{{ $order->order->user->name . ' ' . $order->order->user->last_name }}
                        </td>
                        <td class="text-left  ">{{ $order->order->id }}
                        </td>
                        <td class="text-left  ">{{ $order->product->name }}</td>
                        <td class="text-center  ">${{ $order->product->price }}</td>
                        <td class="text-center  ">{{ $order->quantity }}</td>
                        <td class="text-center  ">${{ $subTotal = $order->quantity * $order->product->price }}</td>

                        <div class="invisible">{{ $total = $total + $subTotal }} </div>

                    </tr>
                @endforeach
                <tr>
                    <td colspan="6">
                        <div class="md:text-xl md:float-none float-left font-bold text-sm text-right ">Total del Dia: $
                            {{ $total }}</div>
                    </td>
                </tr>

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
    </script>
@endsection
