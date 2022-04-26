@extends('layouts.layout')

@section('content')
    <div class="container overflow-hidden w-screen ">
        <div class="row">
            <div class="mt-16  ">

                {!! Form::model($sabor, ['route' => 'sabores.update', 'method' => 'put', 'novalidate', 'files' => true]) !!}

                {!! Form::hidden('id', $sabor->id) !!}
                <div
                    class="w-screen h-screen pt-36 bg-white  shadow-xl mx-auto lg:px-96 md:px-20 sm:px-6 space-y-6 text-center 2xl:pt-56 2xl:pb-64 lg:pt-44 lg:pb-48 md:pt-32 md:pb-64 sm:pt-24 sm:pb-40  ">

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('status', null, ['class' => 'text-black font-semibold text-left']) !!}

                        <select class=" w-full p-3 rounded-lg bg-transparent text-black " name="status"
                            :value="old('status')">
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="disponible">
                                Disponible</option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="agotado">Agotado
                            </option>
                        </select>
                    </div>

                    <div class="form-group my-4">
                        {!! Form::submit('Actualizar', ['class' => 'w-full text-white bg-black rounded-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-5 ']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
