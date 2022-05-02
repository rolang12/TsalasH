<div>
    <div class="md:mt-10 mt-8 grid md:grid-cols-3 grid-cols-1 lg:grid-cols-4 px-3 py-auto items-center">

        @foreach ($iceCreams as $item)
            <a href="{{ route('products.crud.show-product', ['name' => $item->name]) }}">

                <div
                    class="col my-4 p-3 mx-2 transform hover:scale-105 motion-reduce:transform-none duration-500 overflow-hidden bg-white rounded-lg  shadow-sm dark:bg-gray-800">
                    <div class="py-2">
                        <h1
                            class="2xl:text-3xl lg:text-3xl md:text-xl text-xl font-semilight text-gray-800 font-principal dark:text-white">
                            {{ $item->name }}
                        </h1>
                        <p class="mt-1 2xl:text-2xl lg:text-xl md:text-sm font-light text-gray-600 dark:text-gray-400">
                            {{ $item->description }}
                        </p>
                    </div>
                    <img class="object-cover w-full h-72 mt-2" src="{{ asset('/storage/images/' . $item->file) }}"
                        alt="TsalasH">

                    <div class="grid grid-cols-2 justify-between px-4 py-2 bg-gray-50 rounded-b-lg ">

                        <div class="col">
                            <h1 class="text-lg  py-3 text-left font-semibold text-gray-600">Precio: ${{ $item->price }}
                            </h1>
                        </div>
                        <div class="col text-center ">
                            <i class="fa-solid py-3 text-purple-700 font-extrabold text-xl fa-eye"></i>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach

    </div>
</div>
