@extends('layouts.layout')

@section('title', 'Editar Orden')

@section('content')
    <div class="container bg-white overflow-hidden w-screen ">
        <div class="row">
            <div class="mt-16  ">

                {!! Form::model($order, ['route' => 'orders.crud.update', 'method' => 'put', 'novalidate', 'files' => true]) !!}

                {!! Form::hidden('id', $order->id) !!}
                {!! Form::hidden('users_id', $order->users_id) !!}
                <div
                    class="w-screen h-screen pt-36 border border-black shadow-xl mx-auto  lg:px-96 md:px-20 sm:px-4 space-y-6 text-center ">
                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('Estado', null, ['class' => 'text-black font-semibold text-left']) !!}

                        <select class=" w-full p-3 rounded-lg bg-transparent text-black " name="status"
                            :value="old('status')">
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="enviado">Enviado
                            </option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="espera">Espera
                            </option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="proceso">Proceso
                            </option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="despachado">
                                Despachado</option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="confirmado">
                                Confirmado</option>
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
