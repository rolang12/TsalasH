<div>
    
    <form class="text-left py-3 " action="{{route('cart.cart.add')}}" method="POST" >
        
        @csrf

        <input type="hidden" name="id" value="{{$product->id}}">
        <input type="hidden" name="name" value="{{$product->name}}">
        <input type="hidden" name="price" value="{{$product->price}}">
        <label class="text-gray-800 text-left text-base font-semibold" for="quantity">Cant:</label>
        <input class="text-gray-800 border-none text-lg w-16 rounded-lg bg-transparent text-center " placeholder="0" type="number" class="w-5" name="quantity" id="quantity">
        <button class="my-auto ml-auto font-semibold float-right text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded"><input type="submit" class="font-semibold" name="btn" value="Añadir al Carrito"></button>

    </form>  

</div>
