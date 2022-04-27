<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')

    <style>
        @media only screen and (max-width: 639px) and (min-width: 401px) {
            .ssm {
                height: 45%;
            }

            .text-mini {
                font-size: 170%;
            }
        }

        @media only screen and (max-width: 400px) and (min-width: 300px) {
            .ssm {
                height: 50%;
            }

            .text-mini {
                font-size: 130%;
            }
        }

    </style>

    <div class="pt-16 xl:h-4/5 lg:h-2/5 md:h-2/5 sm:h-4/5 ssm item-center">
        <div class="swiper mySwiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="block  md:mt-0 text-white  xl:text-7xl md:text-5xl sm:text-4xl text-mini text-center">
                        <img class="object-cover w-full h-full  brightness-90"
                            src="https://img.besthqwallpapers.com/Uploads/25-8-2017/19369/fruit-ice-cream-4k-dessert-ice-cream-balls-berries.jpg"
                            alt="imagen_pixabay" />
                        <div style="font-family: 'Pacifico', cursive;" class="centrado sombra">¡Bienvenid@s a TsalasH
                            Delicias del Parque, adentra tu paladar a nuestros deliciosos sabores! </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="block  md:mt-0 text-white  xl:text-7xl md:text-5xl sm:text-4xl text-mini text-center">
                        <img class="object-cover w-full h-full  brightness-90"
                            src="https://s1.1zoom.me/big3/60/Sweets_Ice_cream_Balls_Multicolor_531419_4800x3200.jpg"
                            alt="imagen_pixabay" />
                        <div style="font-family: 'Pacifico', cursive;" class="centrado sombra">Disfruta de una experiencia
                            única, incluso en la comodidad de tu casa!</div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="block  md:mt-0 text-white  xl:text-7xl md:text-5xl sm:text-4xl text-mini text-center">
                        <img class="object-cover w-full h-full brightness-90"
                            src="https://elifeenespanol.com/wp-content/uploads/2016/11/Fast-food.jpg"
                            alt="imagen_pixabay" />
                        <div style="font-family: 'Pacifico', cursive;" class="centrado sombra">Puedes seleccionar en nuestra
                            gran variedad de menú</div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <!--aqui carrusel -->



    @if (count(Cart::getContent()))
        <div
            class="fixed right-0 text-xl bottom-12 bg-gradient-to-r from-cyan-400 to-pink-400 md:py-4 md:px-5 py-2 px-3 z-50 rounded-lg text-white font-bold animate-pulse duration-300 hover:-translate-x-6 ">
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

    <div class="left-80 w-1/2 absolute z-30 top-0">
        <livewire:messages.success-product />
    </div>

    <div class="left-80 w-1/2 absolute z-30 top-0">
        @include('livewire.messages.errors')
    </div>

    <div class="bg-white md:mt-0 -mt-5 min-h-screen py-9 ">

        <h2 class="text-black font-principal text-5xl text-center  z-50 font-semibold pb-12">Helados</h2>
        <livewire:index.helados />

    </div>

    <div class="bg-blue-300 min-h-screen py-9">

        <h2 class="text-white font-principal text-5xl text-center z-50 font-semibold pb-12">Comidas Rápidas</h2>

        <livewire:index.comidas />

    </div>

    <div class="bg-white min-h-screen py-9">
        <h2 class="text-black font-principal text-5xl text-center z-50 font-semibold pb-12">Bebidas</h2>

        <livewire:index.bebidas />

    </div>

    <div class="bg-black  ">

        <livewire:index.categorias />

    </div>

    <div class="bg-white  border-black ">
        <hr class="mx-20">
        <livewire:index.comments />

    </div>



    <div>

        <div class="flex justify-center my-3 items-center p-7 bg-gradient-to-l from-white to-violet-100">

            <div class="h-80 px-7 w-[700px] rounded-[12px]  p-4">

                <p class="md:text-2xl text-lg font-semibold text-gray-700  transition-all hover:text-sky-600">
                    Danos tu Opinión
                </p>

                {{ Form::open(['route' => 'comments.store-comments', 'class' => 'text-center  mx-auto ']) }}

                {{ Form::textarea('content', null, ['class' =>'h-40 bg-transparent px-3 text-md py-1 mt-5 outline-none border-pink-300 w-full resize-none border rounded-lg ','required','placeholder' => 'Agrega tu comentario aquí']) }}

                <div class="flex justify-between mt-2"> {!! Form::submit('Comentar', ['class' => 'h-12 w-[150px] border border-pink-300 text-basic text-gray-700 rounded-lg transition-all  cursor-pointer hover:text-white hover:bg-purple-400']) !!}
                    <p class="text-sm text-gray-700 ">Debe tener al menos 10 caracteres</p>
                </div>

                {!! Form::close() !!}

            </div>

        </div>

    </div>
@endsection
