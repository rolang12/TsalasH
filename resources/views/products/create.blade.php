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

            {!!  Form::open(['route' => 'products.crud.store' ] ) !!}
			{{-- {!! Form::model(['route' => 'user.user.store', 'method' => 'POST', 'novalidate']) !!} --}}
            {!! Form::hidden('users_id', Auth::user()->id;) !!}
            {!! Form::hidden('place', 'local';) !!}

            <div class="w-screen h-screen pt-36 gradient  space-y-4 border border-pink-700 shadow-xl mx-auto px-96 text-center "   >   
                <div class="form-group grid grid-cols-2  ">
                      {!! Form::label('name', null,['class' => 'text-left text-white font-semibold text-base' ] ) !!}
                      {!! Form::text('name', null, ['class' => 'bg-transparent text-white font-semibold border rounded border-pink-500 w-full  form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group grid grid-cols-2 ">
                    {!! Form::label('price', null, ['class' => 'text-white font-semibold text-left'] ) !!}
                    {!! Form::number('price', null, ['class' => 'bg-transparent text-white font-semibold border rounded border-pink-500 w-full form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group grid grid-cols-2 ">
                    {!! Form::label('stock_min', null, ['class' => 'text-white font-semibold text-left'] ) !!}
                    {!! Form::number('stock_min', null, ['class' => 'bg-transparent text-white font-semibold border rounded border-pink-500 w-full form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group grid grid-cols-2 ">
                    {!! Form::label('description', null, ['class' => 'text-white font-semibold text-left'] ) !!}
                    {!! Form::text('description', null, ['class' => 'bg-transparent text-white font-semibold border rounded border-pink-500 w-full form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group grid grid-cols-2 ">
                    {!! Form::label('categories_id',null,['class' => 'text-white font-semibold text-left'] ) !!}

                    <select class=" w-full p-3 rounded-lg bg-transparent text-white " name="categories_id" :value="old('categories_id')">
                        <option class="bg-transparent text-light text-base text-gray-700 p-4" value="1">Helado</option>
                        <option class="bg-transparent text-light text-base text-gray-700 p-4" value="2">Comida Rápida</option>
                        <option class="bg-transparent text-light text-base text-gray-700 p-4" value="3">Bebida</option>
                               
                    </select>
                </div>

                {{ Form::file('media', [
                    'class' => 'text-light file:mr-4 file:py-2 file:px-4 file:bg-transparent
                                file:border-0 file:text-base file:font-semibold file:text-pink-500
                                hover:file:bg-pink-100 text-white bg-transparent p-4 col-span-2 w-full
                                border border-pink-500 h-15 rounded-sm p-3  my-2',
                    'required',
                ]) }}

                <div class="form-group my-4">
                      {!! Form::submit('Crear', ['class' => 'w-full text-white gradient-btn rounded-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-5 ' ] ) !!}
                </div>
            </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>

@endsection