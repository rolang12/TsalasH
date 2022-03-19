<div>
    
    <div class="md:mt-10 mt-5 grid md:grid-cols-4 grid-cols-1 px-3 py-auto items-center">
        
        @foreach ($iceCreams as $item)
        
        <div class="col my-4 p-3 mx-2 transform hover:scale-105 motion-reduce:transform-none duration-500 overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="py-2">
                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">{{$item->name}}</h1>
                    <p class="mt-1 text-base text-gray-600 dark:text-gray-400">{{$item->description}}</p>
                </div>

                <img class="object-cover w-full h-48 mt-2" src="{{ asset('/storage/images/helado.jpg' )}}" alt="NIKE AIR">
        
                <div class="grid grid-cols-2 justify-between px-4 py-2 bg-gradient-to-r from-purple-600 to-rose-600 ">
                    <h1 class="text-lg  py-3 text-left font-bold text-white">Precio: ${{$item->price}}</h1> 
                   <a class="justify-self-end my-auto " href="{{ route ('products.crud.show-product', ['id' => $item->id ]) }}" ><i class="fa-solid  text-white font-extrabold text-xl fa-eye"></i></a>
                </div>

                <form class="text-left border-none bg-gradient-to-r from-purple-600 to-rose-600 " action="{{route('cart.cart.add')}}" method="POST" >
                    @csrf
 
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <input type="hidden" name="name" value="{{$item->name}}">
                    <input type="hidden" name="price" value="{{$item->price}}">
                </form>

               
            </div>
        
        @endforeach
    </div>
</div>
