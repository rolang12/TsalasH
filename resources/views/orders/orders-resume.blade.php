@extends('layouts.layout')

@section('content')

<script>
    
</script>

<div class="invisible" >{{$total = 0}}  </div>
<div id='recipients' class="p-10 mt-6 lg:mt-0 rounded shadow bg-gray-200">
                   
    <table id="example" class="stripe hover p-4 " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>

            <tr class="bg-black p-3 text-white ">
                <th data-priority="1">Cliente</th>
                <th class="text-left" >Producto</th>
                <th data-priority="3">Precio</th>
                <th data-priority="4">Cantidad</th>
                <th class="text-center">Precio Total</th>
            </tr>

        </thead>

        <tbody>
            @foreach ($orders as $order)
            
                <tr>

                    <td class="text-left  ">{{ $order->order->user->name." ".$order->order->user->last_name  }}</td>
                    <td class="text-left  ">{{ $order->product->name}}</td>
                    <td class="text-center  ">$ {{ $order->product->price}}</td>
                    <td class="text-center  ">{{ $order->quantity}}</td>
                    <td class="text-center  ">$ {{ $subTotal = $order->quantity*$order->product->price }}</td>

                    <div class="invisible" >{{$total = $total +  $subTotal}}  </div>

                </tr>
            @endforeach
      
        </tbody>

        <tr>
            <td class="md:visible invisible" >
                 
            </td >
            <td class="md:visible invisible" >
            
            </td>
            <td class="md:visible invisible" >
            
            </td>
            <td class="md:visible invisible" >
            
            </td>
            <td class=" w-screen md:w-auto " >
                 <div class="md:text-2xl md:float-none float-left  text-sm text-right " >Total del Dia: $ {{$total}}</div>
            </td>
        </tr>

    </table>

</div>

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

 </script>
@endsection