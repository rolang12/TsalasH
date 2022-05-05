@extends('layouts.layout')

@section('content')
    @include('livewire.messages.errors')
    <div class="row mt-20 md:mb-5 mb-10">


        {!! Form::model($product, ['route' => 'products.crud.update', 'method' => 'put', 'novalidate', 'files' => true]) !!}
        {!! Form::hidden('id', $product->id) !!}
        <div
            class="md:w-2/4  w-auto h-screen container mx-auto lg:px-96 md:px-20 sm:px-4 space-y-6  2xl:pt-56 2xl:pb-64 lg:pt-20 lg:pb-48 md:pt-32 md:pb-64 sm:pt-24 sm:pb-40  text-center ">
            <div class="text-4xl font-bold mb-10 text-center">Editar Producto</div>

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
@endsection
