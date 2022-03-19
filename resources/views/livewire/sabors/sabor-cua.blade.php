<div>
    <form class="text-left " action="{{route('cart.cart.add')}}" method="POST" >
        @csrf

        <input type="hidden" name="id" value="{{$product->id}}">
        <input type="hidden" name="name" value="{{$product->name}}">
        <input type="hidden" name="price" value="{{$product->price}}">

        <select class="w-2/2" name="categories" id="categories">
            @foreach ($sabores as $sabor )
                <div class="m-auto">{{$sabor->sabor}}</div>
                <option value="[{{$sabor->sabor}}]">{{$sabor->sabor}}</option>
            @endforeach
        </select>
        <select class="w-2/2" name="categories" id="categories">
            @foreach ($sabores as $sabor )
                <div class="m-auto">{{$sabor->sabor}}</div>
                <option value="[{{$sabor->sabor}}]">{{$sabor->sabor}}</option>
            @endforeach
        </select>
        <select class="w-2/2" name="categories" id="categories">
            @foreach ($sabores as $sabor )
                <div class="m-auto">{{$sabor->sabor}}</div>
                <option value="[{{$sabor->sabor}}]">{{$sabor->sabor}}</option>
            @endforeach
        </select>
        <select class="w-2/2" name="categories" id="categories">
            @foreach ($sabores as $sabor )
                <div class="m-auto">{{$sabor->sabor}}</div>
                <option value="[{{$sabor->sabor}}]">{{$sabor->sabor}}</option>
            @endforeach
        </select>

        <button class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded"><input type="submit" name="btn" value="Añadir al Carrito"></button>

    </form>  

</div>


