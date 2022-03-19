<div>
    
    <div class="md:mt-10 mt-5 grid md:grid-cols-4 grid-cols-1 px-3 py-auto items-center">
        
        @foreach ($meats as $meat)
        
        <div class="col my-4 p-3 mx-2 transform hover:scale-105 motion-reduce:transform-none duration-500 overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="py-2">
                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">{{$meat->name}}</h1>
                    <p class="mt-1 text-base text-gray-600 dark:text-gray-400">{{$meat->description}}</p>
                </div>

                <img class="object-cover w-full h-72 mt-2" src="{{ asset('/storage/images/helado.jpg' )}}" alt="NIKE AIR">
        
                <div class="grid grid-cols-2 justify-between px-4 py-2 bg-gradient-to-r from-purple-600 to-rose-600 ">
                    <h1 class="text-lg  py-3 text-left font-bold text-white">Precio: ${{$meat->price}}</h1> 
                   <a class="justify-self-end my-auto " href="{{ route ('products.crud.show-product', ['id' => $meat->id ]) }}" ><i class="fa-solid  text-white font-extrabold text-xl fa-eye"></i></a>
                </div>

                <form class="text-left border-none bg-gradient-to-r from-purple-600 to-rose-600 " action="{{route('cart.cart.add')}}" method="POST" >
                    @csrf
 
                    <input type="hidden" name="id" value="{{$meat->id}}">
                    <input type="hidden" name="name" value="{{$meat->name}}">
                    <input type="hidden" name="price" value="{{$meat->price}}">
                    <div class="grid grid-cols-3 " >
                        <label class="ml-1 text-white text-base my-auto border-none text-left p-3 font-normal " for="quantity">Cant:</label>
                        <input class="justify-self-center my-auto text-white border-none -ml-28 w-1/2 text-lg   bg-transparent text-left " placeholder="0" min="0" max="15" type="number" class="w-5" name="quantity" id="quantity">
                        <input class="mr-3  justify-self-end my-3 border-none text-base p-3  rounded-lg font-bold text-white transition-colors duration-200  transform bg-purple-500 hover:bg-purple-700 focus:bg-green-400 focus:outline-none" type="submit" name="btn" value="Añadir al Carrito">
                    </div>

                </form>

               
            </div>
        
        @endforeach
    </div>
</div>
