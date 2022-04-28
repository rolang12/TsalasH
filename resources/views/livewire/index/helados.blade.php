<div>
    <div class="md:mt-10 mt-8 grid md:grid-cols-3 grid-cols-1 lg:grid-cols-4 px-3 py-auto items-center">
        {{-- {{ dd($iceCreams) }} --}}
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
                    <div class=" my-auto ">
                        <img class="object-cover w-full h-72 mt-2" src="{{ asset('/storage/images/' . $item->file) }}"
                            alt="TsalasH">

                        <div class="grid grid-cols-2 justify-evenly px-6 py-2 bg-gray-100 rounded-b-lg">
                            <div class="col">
                                <h1
                                    class="lg:text-base pl-2 2xl:text-2xl md:text-sm py-3 text-left font-semibold text-gray-600">
                                    Precio:
                                    ${{ $item->price }}
                                </h1>
                            </div>
                            <div class="col text-center items-center "> <i
                                    class="fa-solid pt-3 text-purple-700  font-extrabold text-xl fa-eye"></i>
                            </div>
                        </div>


                    </div>
                </div>

                <form class="text-left border-none bg-gray-100  rounded-b-lg" action="{{ route('cart.cart.add') }}"
                    method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="hidden" name="name" value="{{ $item->name }}">
                    <input type="hidden" name="price" value="{{ $item->price }}">
                </form>
            </a>
        @endforeach

    </div>

</div>
