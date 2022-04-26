@extends('layouts.layout')

@section('content')
    <div class="container overflow-hidden w-screen ">
        <div class="row">
            <div class="mt-24">

                {!! Form::open(['route' => 'products.crud.store', 'methos' => 'POST', 'files' => true]) !!}
                {{-- {!! Form::model(['route' => 'user.user.store', 'method' => 'POST', 'novalidate']) !!} --}}
                {!! Form::hidden('users_id', Auth::user()->id) !!}
                {!! Form::hidden('place', 'local') !!}

                <div
                    class="w-screen h-screen bg-white border-black shadow-xl mx-auto lg:px-96 md:px-20 sm:px-4 space-y-6  2xl:pt-56 2xl:pb-64 lg:pt-20 lg:pb-48 md:pt-32 md:pb-64 sm:pt-24 sm:pb-40  text-center ">
                    <div class="form-group grid grid-cols-2  ">
                        {!! Form::label('Nombre', null, ['class' => 'text-left text-black font-semibold text-base']) !!}
                        {!! Form::text('name', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-black w-full  form-control', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('Precio', null, ['class' => 'text-black font-semibold text-left']) !!}
                        {!! Form::number('price', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-black w-full form-control', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('Stock min', null, ['class' => 'text-black font-semibold text-left']) !!}
                        {!! Form::number('stock_min', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-black w-full form-control', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('Descripción', null, ['class' => 'text-black font-semibold text-left']) !!}
                        {!! Form::text('description', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-black w-full form-control', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('Categoria', null, ['class' => 'text-black font-semibold text-left']) !!}

                        <select class=" w-full p-3 rounded-lg bg-transparent text-black " name="categories_id"
                            :value="old('categories_id')">
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="1">Helado</option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="2">Bebidas Frías
                            </option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="3">Bebidas
                                Calientes</option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="4">Comida Rápida
                            </option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="5">Carnes</option>
                        </select>
                    </div>

                    {{ Form::file('media', [
                        'class' => 'text-gray-700 file:mr-4 file:py-2 file:px-4 file:bg-transparent
                                            file:border-0 file:text-base file:font-semibold file:text-pink-500
                                            hover:file:bg-pink-100 text-white bg-transparent p-4 col-span-2 w-full
                                            border border-black h-15 rounded-sm p-3  my-2',
                        'required',
                    ]) }}

                    <div class="form-group my-4">
                        {!! Form::submit('Crear', ['class' => 'w-full bg-black text-white gradient-btn rounded-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-5 ']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
