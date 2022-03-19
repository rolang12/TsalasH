<div>
    
    <form class="text-left " action="{{route('cart.cart.add')}}" method="POST" >
        
        @csrf

        <input type="hidden" name="id" value="{{$product->id}}">
        <input type="hidden" name="name" value="{{$product->name}}">
        <input type="hidden" name="price" value="{{$product->price}}">
        <label class="text-white text-left  font-semibold " for="quantity">Cant:</label>
        <input class="text-white border-none text-lg w-16 rounded-lg bg-transparent text-center " placeholder="0" type="number" class="w-5" name="quantity" id="quantity">
        <button class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded"><input type="submit" name="btn" value="Añadir al Carrito"></button>

    </form>  

</div>
