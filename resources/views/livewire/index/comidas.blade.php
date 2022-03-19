<div>
    <div class="md:mt-10 mt-5 grid md:grid-cols-3 grid-cols-1 lg:grid-cols-4 px-3 py-auto items-center">
        
        @foreach ($foods as $food)
        
            <div class="col  p-3 mx-2 transform hover:scale-105 motion-reduce:transform-none duration-500 overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="py-2 ">
                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">{{$food->name}}</h1>
                    <p class="mt-1 text-base text-gray-600 dark:text-gray-400">{{$food->description}}</p>
                </div>

                <img class="object-cover w-full h-72 mt-2" src="{{ asset('/storage/images/helado.jpg' )}}" alt="NIKE AIR">
        
                <div class="grid grid-cols-2 justify-between px-4 py-2 bg-gradient-to-r from-purple-600 to-rose-600 ">
                    <h1 class="text-lg  py-3 text-left font-bold text-white">Precio: ${{$food->price}}</h1> 
                    <button class="justify-self-end " ><i class="fa-solid  text-white font-extrabold text-xl fa-eye"></i></button>
                    
                    <form class="text-left " action="{{route('cart.cart.add')}}" method="POST" >
                        @csrf

                        <input type="hidden" name="id" value="{{$food->id}}">
                        <input type="hidden" name="name" value="{{$food->name}}">
                        <input type="hidden" name="price" value="{{$food->price}}">
                        <label class="text-white text-left  font-semibold " for="quantity">Cant:</label>
                        <input class="text-white border-none text-lg w-16 rounded-lg bg-transparent text-center " placeholder="0" min="0" max="15" type="number" class="w-5" name="quantity" id="quantity">
                            
                    </form>
                    <button class="col text-xs md:text-base p-2 ml-4 rounded-lg font-bold text-white transition-colors duration-200  transform bg-purple-500 hover:bg-purple-700 focus:bg-green-400 focus:outline-none"><input type="submit" name="btn" value="Añadir al Carrito"></button> 

                </div>
            </div>
        
        @endforeach

    </div>
</div>
