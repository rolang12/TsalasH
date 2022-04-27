@extends('layouts.layout')

@section('title', 'Menú')

@section('content')
    <livewire:messages.success-product />
    <livewire:messages.error-product />

    <style>
        h2 {
            animation-duration: 4s;
            animation-name: slidein;
            animation-delay: 1s;
        }

        @keyframes slidein {
            from {
                margin-left: 100%;
                width: 300%
            }

            to {
                margin-left: 0%;
                width: 100%;
            }
        }

    </style>

    <div>
        <div class="contenedorimg w-full">
            <img class="md:mt-0 mt-20 w-full brightness-50 blur-sm"
                src="https://previews.123rf.com/images/prakasit/prakasit1704/prakasit170401061/77239818-retrato-de-un-grupo-de-amigos-comiendo-helado-delante-de-la-pared-de-ladrillo-marr%C3%B3n-.jpg"
                alt="">
            <div class="centrado  text-white  md:text-5xl text-3xl font-bold">
                <p class="mb-5 font-principal mt-40">Mira Nuestra Gran Variedad de Productos!</p>
                <a href="#helados"><i class="fa-solid invisible md:visible fa-arrow-down animate-bounce"></i></a>
            </div>
        </div>
    </div>


    @if (count(Cart::getContent()))
        <div
            class="fixed right-0 text-xl bottom-12 bg-gradient-to-r from-cyan-400 to-pink-400 py-4 px-5  z-50 rounded-lg text-white font-bold animate-pulse duration-300 hover:-translate-x-6 ">
            <a href="{{ route('cart.cart.checkout') }}">
                Ver
                <svg class="w-8 h-8 inline-block  " xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 576 512">
                    @fontawesome
                    <path
                        d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z" />
                </svg>
            </a>
        </div>
    @endif

    <!-- Inicio de Recent Posts -->

    <div class="-mt-2">

        <div class="bg-black py-7 text-center ">
            <h2
                class="md:text-6xl text-3xl font-principal-n  animate-pulse duration-300 delay-200  text-white font-semibold ">
                Recomendados</h2>
        </div>

        <livewire:recents-products />

    </div>

    <div class="py-10">
        <h2 class="text-center font-principal font-bold text-4xl text-purple-500 pb-8">Categorias</h2>

        <ul class="inline-block animate-pulse flex text-2xl justify-center font-light space-x-8">
            <li><a href="#helados"> Helados</a></li>
            <li><a href="#bebidas-frias"> Bebidas Frias</a></li>
            <li><a href="#bebidas-calientes"> Bebidas Calientes</a></li>
            <li><a href="#comidas-rapidas">Comidas Rápidas</a></li>
            <li><a href="#carnes">Carnes </a> </li>
        </ul>


    </div>


    <!-- Fin de Recent Posts -->

    <div id="helados" class="bg-purple-200 min-h-screen py-9 ">

        <h2 class="text-white font-principal text-5xl text-center  z-50 font-bold pb-12">Helados</h2>
        <livewire:menu.helados />

    </div>

    <div id="bebidas-frias" class="bg-white min-h-screen py-9 ">

        <h2 class="text-pink-200 font-principal text-5xl text-center z-50 font-bold pb-12">Bebidas Frías</h2>
        <livewire:menu.bebidas-frias />

    </div>

    <div id="bebidas-calientes" class="bg-cyan-200 min-h-screen py-9 ">

        <h2 class="text-white font-principal text-5xl text-center z-50 font-bold pb-12">Bebidas Calientes</h2>
        <livewire:menu.bebidas-calientes />

    </div>

    <div id="comidas-rapidas" class=" min-h-screen py-9 ">

        <h2 class="text-cyan-200 font-principal text-5xl text-center z-50 font-bold pb-12">Comidas Rápidas</h2>
        <livewire:menu.comidas-rapidas />

    </div>

    <div id="carnes" class=" bg-blue-200  min-h-screen py-9 ">

        <h2 class="text-white font-principal text-5xl text-center z-50 font-bold pb-12">Carnes</h2>
        <livewire:menu.carnes />

    </div>
@endsection
