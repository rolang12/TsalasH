@extends('layouts.layout')

@section('content')
    <div class="container lg:overflow-hidden w-screen ">
        <div class="row ">
            <div class="mt-16  ">
                {!! Form::model($product, ['route' => 'products.crud.update', 'method' => 'put', 'novalidate', 'files' => true]) !!}
                {!! Form::hidden('id', $product->id) !!}
                <div
                    class="w-screen pt-20 border shadow-xl mx-auto lg:px-96 md:px-20 sm:px-4 space-y-6 text-center 2xl:pt-56 2xl:pb-64 lg:pt-44 lg:pb-48 md:pt-32 md:pb-64 sm:pt-24 sm:pb-40 ">
                    <div class="form-group grid grid-cols-2  ">
                        {!! Form::label('Nombre', null, ['class' => 'text-left text-black font-semibold text-base']) !!}
                        {!! Form::text('name', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-black w-full  form-control', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('Precio', null, ['class' => 'text-black font-semibold text-left']) !!}
                        {!! Form::number('price', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-black w-full form-control', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('Stock minimo', null, ['class' => 'text-black font-semibold text-left']) !!}
                        {!! Form::number('stock_min', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-black w-full form-control', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2  ">
                        {!! Form::label('descripción', null, ['class' => 'text-left text-black font-semibold text-base']) !!}
                        {!! Form::text('description', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-black w-full  form-control', 'required' => 'required']) !!}
                    </div>

                    {{ Form::file('media', [
                        'class' => 'text-light file:mr-4 file:py-2 file:px-4 file:bg-transparent
                                                    file:border-0 file:text-base file:font-semibold file:text-pink-500
                                                    hover:file:bg-pink-100 text-black bg-transparent p-4 col-span-2 w-full
                                                    border border-black h-15 rounded-sm p-3  my-2',
                        'required',
                    ]) }}

                    <div class="form-group my-4">
                        {!! Form::submit('Actualizar', ['class' => 'w-full bg-black text-white gradient-btn rounded-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-5 ']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
