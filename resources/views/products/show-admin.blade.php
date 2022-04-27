@extends('layouts.layout')

@section('content')
    <div class="mt-72">

    </div>
    {{-- Info del producto --}}
    {{ $product->name }}
    {{ $product->price }}
    {{ $product->description }}
@endsection
