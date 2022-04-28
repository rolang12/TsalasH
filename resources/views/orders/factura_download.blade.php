<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/938/938063.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js"
        integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous">
    </script>
    <title>Factura de Venta - Delicias Del Parque</title>
</head>

<body>
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
                                            src="https://i.ibb.co/3hFxBpt/logo-victor-44px-1.png">
                                        <p class="font-bold text-lg"> Factura de venta </p>
                                        <p> TsalasH - Delicias del Parque </p>
                                    </div>
                                    <div>
                                        <p class="font-medium text-sm text-gray-400"> Comprador </p>
                                        <p> {{ Auth::user()->name . ' ' . Auth::user()->last_name }} </p>
                                        <p> {{ Auth::user()->email }} </p>
                                        <p> CC: {{ Auth::user()->document_id }} </p>
                                        <p> {{ Auth::user()->phone }} </p>
                                    </div>
                                </div>
                                <div class="space-y-2">
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
                                    <td class="whitespace-nowrap text-gray-600 truncate">$ {{ $item->price }} COP</td>
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

                </div>
            </article>
        </div>
    </section>
</body>

</html>
