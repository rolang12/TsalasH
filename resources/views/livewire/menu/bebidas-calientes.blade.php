<div>
    <div class="md:mt-10 mt-8 grid md:grid-cols-3 grid-cols-1 lg:grid-cols-4 px-3 py-auto items-center">

        @foreach ($beverages as $beverage)
            <div
                class="col  mt-4 p-3 mx-2 transform hover:scale-105 motion-reduce:transform-none duration-500 overflow-hidden bg-white rounded-lg shadow-sm dark:bg-gray-800">
                <div class="py-2 ">
                    <h1
                        class="2xl:text-3xl lg:text-3xl md:text-xl text-xl font-semilight text-gray-800 font-principal dark:text-white">
                        {{ $beverage->name }}
                    </h1>
                    <p class="mt-1 2xl:text-2xl lg:text-xl md:text-sm font-light text-gray-600 dark:text-gray-400">
                        {{ $beverage->description }}
                    </p>
                </div>
                <a class="justify-self-end my-auto "
                    href="{{ route('products.crud.show-product', ['name' => $beverage->name]) }}">
                    <img class="object-cover w-full h-72 mt-2" src="{{ asset('/storage/images/' . $beverage->file) }}"
                        alt="TsalasH">

                    <div class="grid grid-cols-2 justify-evenly px-6 py-2 bg-gray-100 rounded-b-lg">
                        <div class="col">
                            <h1
                                class="lg:text-base pl-2 2xl:text-2xl md:text-sm py-3 text-left font-semibold text-gray-600">
                                Precio:
                                ${{ $beverage->price }}
                            </h1>
                        </div>
                        <div class="col text-center items-center">
                            <i class="fa-solid py-3 text-purple-700 font-extrabold text-xl fa-eye"></i>
                        </div>
                    </div>
                </a>
                <form class="text-left border-none bg-gray-50  rounded-lg" action="{{ route('cart.cart.add') }}"
                    method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $beverage->id }}">
                    <input type="hidden" name="name" value="{{ $beverage->name }}">
                    <input type="hidden" name="price" value="{{ $beverage->price }}">
                    <div class="grid grid-cols-3 ">
                        <label
                            class="ml-1 text-gray-600 md:text-sm xl:text-base 2xl:text-3xl my-auto border-none text-left xl:p-3 sm:p-0 font-normal"
                            for="quantity">Cant:</label>
                        <input
                            class="justify-self-center my-auto border-none md:-ml-28 -ml-36 2xl:w-1/2 md:w-3/4 w-1/2 2xl:text-3xl md:text-lg sm:text-base  bg-transparent text-left"
                            placeholder="0" min="0" max="15" type="number" class=" w-5" name="quantity"
                            id="quantity">
                        <input
                            class="mr-3  justify-self-end my-2 border-none md:text-xs xl:text-base 2xl:text-2xl p-3  rounded-lg font-bold text-white transition-colors duration-200  transform bg-purple-500 hover:bg-purple-700 focus:bg-green-400 focus:outline-none"
                            type="submit" name="btn" value="Añadir al Carrito">
                    </div>

                </form>
            </div>
        @endforeach
    </div>
</div>
