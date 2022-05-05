@extends('layouts.layout')

@section('content')
    <div class="container lg:overflow-hidden">
        <div class="row  2xl:pt-56 2xl:pb-64 lg:pt-44 lg:pb-48 md:pt-32 md:pb-64 sm:pt-24 sm:pb-40 bg-white flex">
            {!! Form::model($user, ['route' => 'user.user.update', 'method' => 'put', 'novalidate']) !!}
            {!! Form::hidden('id', $user->id) !!}
            <div class="grid text-center lg:px-96 md:px-20 sm:px-4 space-y-4 items-center w-screen grid-cols-2  gap-3">
                <div class="text-left">{!! Form::label('Nombre', null, ['class' => 'text-left text-black font-semibold  text-base']) !!}</div>
                <div class="text-left pr-0">{!! Form::text('name', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-pink-500 w-full  form-control', 'required' => 'required']) !!}</div>
                <div class="text-left"> {!! Form::label('Email', null, ['class' => 'text-black font-semibold text-left']) !!}</div>
                <div class="text-left"> {!! Form::email('email', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-pink-500 w-full form-control', 'required' => 'required']) !!}</div>
                <div class="text-left">{!! Form::label('Rol', null, ['class' => 'text-black font-semibold text-left']) !!}</div>
                <div class="text-left">
                    <select class=" w-full p-3 rounded-lg bg-transparent text-black " name="rol" :value="old('rol')">
                        <option class="bg-transparent font-light text-base text-gray-700 p-4" value="client">Cliente
                        </option>
                        <option class="bg-transparent font-light text-base text-gray-700 p-4" value="weird">Mesero</option>
                        <option class="bg-transparent font-light text-base text-gray-700 p-4" value="admin">Administrador
                        </option>
                    </select>
                </div>
                <div class="text-left">{!! Form::label('Estado', null, ['class' => 'text-black font-semibold text-left']) !!}</div>
                <div class="text-left">
                    <select class=" w-full p-3 rounded-lg bg-transparent text-black " name="status" :value="old('status')">
                        <option class="bg-transparent font-light text-base text-gray-700 p-4" value="habilited">Habilitado
                        </option>
                        <option class="bg-transparent font-light text-base text-gray-700 p-4" value="habilited">Inhabilitado
                        </option>
                    </select>
                </div>
                <div class="text-left">{!! Form::label('Telefono', null, ['class' => 'text-black font-semibold text-left']) !!}</div>
                <div class="text-left">{!! Form::text('phone', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-pink-500 w-full form-control', 'required' => 'required']) !!}</div>
                <div class="text-left">{!! Form::label('Direccion', null, ['class' => 'text-left text-black font-semibold text-base']) !!}</div>
                <div class="text-left">{!! Form::text('address', null, ['class' => 'bg-transparent text-black font-semibold border rounded border-pink-500 w-full  form-control', 'required' => 'required']) !!}</div>
            </div>
            <div class="grid-cols-2 lg:px-96 md:px-20 my-4">
                {!! Form::submit('Actualizar', ['class' => 'w-full bg-black text-white gradient-btn rounded-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-5']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
