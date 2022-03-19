@extends('layouts.layout')

@section('content')

<style>
    .gradient {
        background: linear-gradient(90deg, #110e0f 0%, #080322 100%);
    }
    .gradient-btn {
        background: linear-gradient(90deg, #300235 0%, #0c023f 100%);
    }

</style>

<div class="container  w-screen ">
	<div class="row">
		<div class="mt-16  ">

            {!! Form::model($sabor, ['route' => 'sabores.update', 'method' => 'put', 'novalidate', 'files' => true ]) !!}
        
            {!! Form::hidden('id', $sabor->id) !!}
          
            <div class="w-screen h-screen pt-36 gradient  space-y-4 border border-pink-700 shadow-xl mx-auto px-96 text-center "   >   
                
                <div class="form-group grid grid-cols-2 ">
                    {!! Form::label('status', null,['class' => 'text-white font-semibold text-left'] ) !!}

                    <select class=" w-full p-3 rounded-lg bg-transparent text-white " name="status" :value="old('status')">
                        <option class="bg-transparent text-light text-base text-gray-700 p-4" value="disponible">Disponible</option>
                        <option class="bg-transparent text-light text-base text-gray-700 p-4" value="agotado">Agotado</option>
                               
                    </select>
                </div>
            
                <div class="form-group my-4">
                      {!! Form::submit('Update', ['class' => 'w-full text-white gradient-btn rounded-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-5 ' ] ) !!}
                </div>
            </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>

@endsection