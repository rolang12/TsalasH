<div>
    @foreach ($categories as $category)
            
    <div class="col px-2 overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <div class=" pt-4 ">
            <h1 class="text-3xl p-3 bg-rose-500 font-bold text-gray-800 uppercase text-center dark:text-white">{{$category->name}}</h1>
        </div>


        <div class="contenedorimg">
            <img class="object-cover w-screen h-72 duration-300 brightness-75 hover:brightness-100 " src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=320&q=80" alt="NIKE AIR">
            <div class="texto-encima ">Texto</div>
            <div class="centrado text-white text-3xl  ">Conoce nuestros deliciosos </div>
        </div>


        <div class="flex px-4  bg-gray-900">
            <h1 class="text-sm font-bold text-white">aaa</h1>
            <button class="p-5 text-left text-base  font-semibold text-gray-300 uppercase transition-colors duration-200 transform rounded focus:bg-gray-400 focus:outline-none">¡Ver todos los productos!</button>
        </div>
    </div>

@endforeach
</div>
