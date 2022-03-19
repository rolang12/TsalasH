<div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
                var cantidadMaxima=3;
            // Evento que se ejecuta al soltar una tecla en el input
            $("#cantidad").keydown(function(){
                $("input[type=checkbox]").prop('checked', false);
                $("#seleccionados").html("0");
            });
        
            // Evento que se ejecuta al pulsar en un checkbox
            $("input[type=checkbox]").change(function(){
        
                // Cogemos el elemento actual
                var elemento=this;
                var contador=0;
        
                // Recorremos todos los checkbox para contar los que estan seleccionados
                $("input[type=checkbox]").each(function(){
                    if($(this).is(":checked"))
                        contador++;
                });
        
                // Comprobamos si supera la cantidad máxima indicada
                if(contador>cantidadMaxima)
                {
                    alert("Has seleccionado mas checkbox que los indicados");
        
                    // Desmarcamos el ultimo elemento
                    $(elemento).prop('checked', false);
                    contador--;
                }

                if(contador != 3)
                {
                   
                    document.getElementById('btn1').disabled=true;

                } else {

                    document.getElementById('btn1').disabled=false;

                }

                if (contador < cantidadMaxima){
                    
                    const block = document.getElementById('block');
                    let HTMLString = `<h1>Te falta elegir más sabores!</h1>`;
                    block.innerHTML = HTMLString;
                } else {

                    const block = document.getElementById('block');
                    let HTMLString = `<h1></h1>`;
                    block.innerHTML = HTMLString;
                }       
  
                $("#seleccionados").html(contador);
            });
        });
    </script>
    <div class="block font-bold text-red-500 " id="block"></div>

    <form  class="text-left " action="{{route('cart.cart.add')}}" method="POST" >
        @csrf

        <input type="hidden" name="id" value="{{$product->id}}">
        <input type="hidden" name="name" value="{{$product->name}}">
        <input type="hidden" name="price" value="{{$product->price}}">
        <input type="hidden" class="text-white border-none text-lg w-16 rounded-lg bg-transparent text-center"  class="w-5" name="quantity" value="1" id="quantity">
        <div class="text-lg  font-semibold my-1 "  for="sabores">Selecciona los Sabores:</div><br>
        <div class="grid grid-cols-4 md:grid-cols-6  ">
        @foreach ($sabores as $sabor )
       
            <div class="mx-1 my-auto ">{{$sabor->sabor}}</div>  <input id="defaultCheck1" class="float-right form-check-input my-1 m-auto p-auto text-light  checked:bg-green-200 border-none bg-green-400 p-4  border border-gray-700 h-15 rounded-sm  " type="checkbox" name="sabores[]" value="{{$sabor->sabor}}"/>
        
        @endforeach
        </div>
        
        <button  type="submit" id="btn1" name="btn" value="Añadir al Carrito" class="flex my-5 text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded"> 
           Añadir al Carrito
        </button>

    </form>  

</div>


