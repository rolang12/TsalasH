<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/icono.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/938/938063.png">
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>TsalasH</title>

    <style>
        .gradient {
            background: linear-gradient(90deg, #78c7ec 10%, #ebb9e8 90%);
        }

        .bg-brown {
            background-color: #221802;

        }

        .gradient-2 {
            background: linear-gradient(10deg, #246280 0%, #803b7b 100%);
        }

        body {
            font-family: 'Nunito', sans-serif;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        /* Non essential CSS - Just for example centering */

        html {
            background-color: #ff6f69;
            background: radial-gradient(#ff6f69, #ff8b87);
            overflow-x: hidden;
        }

        .border2 {

            background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, #C5E7D7 34%, #88d8b0 34%);
            background-size: 400% 400%;
            height: 400px;
            background-position: 25% 50%;
            -webkit-animation: Gradient 15s ease infinite;
            -moz-animation: Gradient 5s ease infinite;
        }

        .inner-cutout {
            padding: ;
            display: block;
            text-align: center;
            background-color: #ff6f69;
            /*#ff6f69*/
            height: 80%;
            width: 95%;
            background: radial-gradient(#ff6f69, #ff8b87);
            background-size: 300%;
            background-position: 50% 50%;
            position: relative;

        }

        .knockout {

            vertical-align: middle;
            text-align: center;
            font-family: 'Pacifico', cursive;
            font-size: 400%;
            color: blue;
            color: #fff;
            background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, #C5E7D7 34%, #88d8b0 34%);
            background-size: 100%;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;

            top: 50%;
            left: 50%;
            position: relative;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);


        }

        .knockout {
            animation: Gradient 5s ease infinite;
            -webkit-animation: Gradient 15s ease infinite;
            -moz-animation: Gradient 5s ease infinite;
        }

        @media only screen and (max-width: 600px) and (min-width: 300px) {
            .knockout {
                font-size: 300%;
            }

            .videoyoutube {
                height: 240px;
                width: 350px;
            }
        }

        /*cuadrar vista en tablet mijo */

        @media only screen and (max-width: 1280px) and (min-width: 601px) {
            .videoyoutube {
                height: 360px;
                width: 400px;
            }
        }

        @media only screen and (max-width: 1440px) and (min-width: 1281px) {
            .videoyoutube {
                height: 400px;
                width: 600px;
            }
        }

        @-webkit-keyframes Gradient {
            0% {
                background-position: 30% 50%
            }

            50% {
                background-position: 25% 50%
            }

            100% {
                background-position: 30% 50%
            }

        }

    </style>

</head>

<body class=" tracking-normal text-white " style="font-family: 'Source Sans Pro', sans-serif;">

    {{-- Test mini navbar --}}

    <div class="gradient">
        <div class="absolute md:hidden max-w-sm mx-auto sm:px-6 ">
            <div class="fixed gradient z-50 w-full items-center justify-between h-20">
                <!-- Logo -->
                <div class="shrink-0 pt-1 pl-2 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <div class="absolute inset-y-0 right-0 px-2 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button id="boton" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md  focus:outline-none focus:ring-2 focus:ring-inset bg-gray-100 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:bg-gray-100 focus:text-gray-500 transition"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menu</span>
                        <!--Icon when menu is closed. Heroicon name: outline/menu Menu open: "hidden", Menu closed: "block"-->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path id="botonx2" class="" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path id="botonx" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="absolute hidden" id="menu">
                <!--al añadir el hidden se quita el menu funcionando el script-->
                <div class="fixed gradient w-full z-40 px-2 pt-20 pb-2 space-y-1">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white"
        <a href="#"  class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium boton">Team 2</a>
        <a href="#"  class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects 2</a>
        <a href="#"  class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar 2</a>
        -->
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('dashboard') }}"
                                class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                                Inicio
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-white z-50 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                                Ingresar
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-white z-50 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>


        <script>
            const boton = document.querySelector('#boton');
            const menu = document.querySelector('#menu');
            const botonx = document.querySelector('#botonx');
            boton.addEventListener('click', () => {
                console.log('me diste click') // mensaje de test
                menu.classList.toggle('hidden')
                console.log('me diste click al boton X') // mensaje de test
                botonx.classList.toggle('hidden')
                botonx2.classList.toggle('hidden')
            })
        </script>

        {{-- Test mini navbar fin --}}

        <div class="relative gradient z-30 bg-black  flex items-top justify-center min-h-screen  sm:items-center py-4">
            @if (Route::has('login'))
                <div class="hidden fixed z-30 top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="my-6 md:py-2 md:px-4 py-5 shadow-lg  bg-white rounded-full  text-lg font-light  hover:text-pink-400 text-pink-600  dark:text-sky-500 ">
                            Inicio</a>
                        {{-- A mi no me sale, ni en opera ni en chrome >.< f ahora se volter --}}
                        <!--rolan el problema sigue toca dejarle lo que le aplique y gg-->
                    @else
                        <a href="{{ route('login') }}"
                            class="my-6 md:py-2 z-50 md:px-4 py-5 shadow-lg  bg-white rounded-full text-lg font-light hover:text-pink-400 text-pink-600  dark:text-sky-500  ">
                            Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="my-6 md:py-2 z-50 md:px-4 py-5 shadow-lg  bg-white rounded-full  text-lg font-light  hover:text-pink-400 text-pink-600  dark:text-sky-500 ">
                                Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="md:pt-24 pt-16">
                <div class=" px-3 sm:py-5 mx-auto flex flex-wrap flex-col md:flex-row ">
                    <!--Left Col-->
                    <div
                        class=" flex-col w-full md:mt-28 sm:mt-10 md:w-2/5 justify-center items-start text-center md:text-center">
                        <p class="uppercase md:text-2xl text-4xl  text-center w-full">¡Bienvenid@s a Heladeria y comidas
                            rápidas !</p>
                        <h1 style="font-family: 'Pacifico', cursive;"
                            class="my-7 md:text-6xl text-5xl animate-pulse text-center text-sky-600 font-semibold">
                            TsalasH
                        </h1>
                        <p class="leading-normal invisible md:visible md:text-xl text-center text-base">
                            Los mejores helados, ensaladas de fruta <br>
                            y más en delicias del parque
                        </p>
                        <button
                            class="mx-auto  lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 md:py-4 md:px-8 py-7 px-11 text-xl shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            @guest
                                <a href=" {{ route('register') }} ">Registrate ahora!</a>
                            @endguest
                            @auth
                                <a href=" {{ route('dashboard') }}  ">Vamos!</a>
                            @endauth
                        </button>
                    </div>
                    <div class="w-full  md:w-3/5 py-6 text-center content-center">
                        <img class="rounded-sm w-auto brightness-125  md:w-4/5"
                            src="https://x6i2p6h3.rocketcdn.me/wp-content/uploads/2017/05/montar-una-helader%C3%ADa.jpg" />
                    </div>
                </div>
            </div>
        </div>


        <!--tener cuidado border es un elemento de tailwind estaba generando un conflicto para mi visualmente 1 px
    de borde en blanco me desespero ver eso y era eso  le agregue 2 al name y gg-->
        <div class="border2 flex  justify-center items-center ">
            <div class="inner-cutout">
                <h1 class="knockout ">Conoce más<br> de Nosotros!</h1>
            </div>
        </div>

        <!-- Inicio NUESTROS PRODUCTOS -->

        <div class="h-full grid grid-cols-1  md:grid-cols-2 bg-amber-100 ">

            <div class="col bg-brown md:py-32 md:px-10  py-16 px-5 ">

                <!--Inicio de carrusel-->
                <div class="swiper mySwiper  ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-center text-white text-5xl text-center">
                                <img class="object-cover imgper h-full w-full  hover:brightness-110 rounded-lg "
                                    src="https://cdn.pixabay.com/photo/2016/12/26/16/09/bowl-1932375_960_720.jpg"
                                    alt="imagen_pixabay" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-center text-white text-5xl text-center">
                                <img class="object-cover imgper w-full h-full hover:brightness-110 rounded-lg "
                                    src="https://cdn.pixabay.com/photo/2018/03/17/06/25/food-3233217_960_720.jpg"
                                    alt="imagen_pixabay" />
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bg-center text-white text-5xl text-center">
                                <img class="object-cover imgper w-full h-full hover:brightness-110 rounded-lg "
                                    src="https://cdn.pixabay.com/photo/2017/08/03/14/38/ice-cream-2576622_960_720.jpg"
                                    alt="imagen_pixabay" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-center text-white text-5xl text-center">
                                <img class="object-cover imgper w-full hover:brightness-110 rounded-lg "
                                    src="https://cdn.pixabay.com/photo/2016/07/21/11/17/drink-1532300_960_720.jpg"
                                    alt="imagen_pixabay" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col my-auto mx-3 py-20 text-orange-900 text-lg px-10 text-justify rounded-lg">
                <h3 style="font-family: 'Pacifico', cursive;" class=" text-5xl pb-5 font-medium text-center">Nuestros
                    Productos</h3>
                <p class="text-2xl font-extralight">Contamos con una gran variedad de Helados, Comidas rapidas y Bebidas
                    para toda ocación
                    con una gran seleccion personalizable para todos los gustos.
                </p>
            </div>


        </div>
        <!-- Fin NUESTROS PRODUCTOS -->


        <div>
            <div class="swiper mySwiper  ">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="block  md:mt-0 text-white  text-6xl text-center">
                            <img class="object-cover w-full h-100   brightness-90"
                                src="https://cdn.pixabay.com/photo/2016/03/05/21/45/pizza-1239077_960_720.jpg"
                                alt="imagen_pixabay" />
                            <div style="font-family: 'Pacifico', cursive;" class="centrado sombra">Los mejores
                                ingredientes a la orden del dia</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="block  md:mt-0 text-white  text-6xl text-center">
                            <img class="object-cover w-full h-100  brightness-90"
                                src="https://cdn.pixabay.com/photo/2018/08/16/22/59/ice-cream-3611698_960_720.jpg"
                                alt="imagen_pixabay" />
                            <div style="font-family: 'Pacifico', cursive;" class="centrado sombra">Disfruta en nuestro
                                local o desde la comodidad de tu casa</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="block  md:mt-0 text-white  text-6xl text-center">
                            <img class="object-cover w-full  h-100 brightness-90"
                                src="https://cdn.pixabay.com/photo/2016/03/05/19/02/hamburger-1238246_960_720.jpg"
                                alt="imagen_pixabay" />
                            <div style="font-family: 'Pacifico', cursive;" class="centrado sombra">Puedes seleccionar en
                                nuestra gran variedad de menú</div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination pb-6"></div>
            </div>

        </div>




        <!-- Inicio Quienes Somos -->
        <div class="md:grid md:grid-cols-2 grid-cols-1 bg-blue-200 ">

            <div class="col my-auto mx-3 py-10 text-gray-900 text-lg px-10  text-justify rounded-lg  ">
                <h3 style="font-family: 'Pacifico', cursive;" class=" text-5xl text-center pb-10 font-semibold ">
                    ¿Quienes Somos?</h3>
                <p class="text-2xl font-extralight">Somos un restaurante de comidas rápidas y heladería que nació de un
                    emprendimiento familiar y gracias a la aceptación del publico hemos crecido en el municipio de
                    Rovira para ofrecer los mejores productos a todo nuestros clientes.</p>

            </div>

            <div class="col my-auto  bg-blue-400 py-10 text-white text-lg  text-justify  ">
                <h3 style="font-family: 'Pacifico', cursive;" class="m-2 text-5xl text-center pb-5 font-medium ">
                    Conoce nuestro local
                </h3>

                <p class="text-2xl font-light px-10 m-2 text-center">
                    Disfruta en familia, en pareja o junto a los que mas quieres.
                </p>

                <div class="col mx-auto flex justify-center">
                    <iframe class="videoyoutube" autoplay allow="fullscreen" controls muted frameBorder="0"
                        height="480"
                        src="https://giphy.com/embed/Qa1wpSe2G0HLPpRnth/video?autoplay=1&loop=1&autopause=0"
                        width="854"></iframe>
                </div>

            </div>

        </div>



        <!--aqui carrusel -->

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

        {{-- Footer --}}
        <footer class="gradient-2 px-7 pt-7 pb-1  text-white">
            <div class="container px-6 pt-4 pb-1 mx-auto">
                <div class="lg:flex">
                    <div class="w-full -mx-6 lg:w-2/5">
                        <div class="px-6">
                            <div>
                                <a href="#"
                                    class="text-2xl font-bold text-white-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">T
                                    salas H</a>
                            </div>

                            <p class="max-w-md mt-2 text-gray-200 dark:text-gray-400">Estamos ubicados en el municipio
                                de Rovira en el departamento del Tolima</p>

                            <div class="flex mt-4 -mx-2">
                                <a href="#"
                                    class="mx-2 text-gray-200 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                    aria-label="Linkden">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                        <path
                                            d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z" />
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2 text-gray-200 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                    aria-label="Facebook">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                        <path
                                            d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z" />
                                    </svg>
                                </a>

                                <a href="#"
                                    class="mx-2text-gray-200 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                                    aria-label="Twitter">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                        <path
                                            d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 lg:mt-0 lg:flex-1">
                        <div class="grid grid-cols-2 gap-5 sm:grid-cols-3 md:grid-cols-3">
                            <div>
                                <h3 class="text-gray-50 uppercase dark:text-white">Acerca de Nosotros</h3>
                                <a href="#"
                                    class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">Company</a>
                                <a href="#"
                                    class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">community</a>
                                <a href="#"
                                    class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">Careers</a>
                            </div>



                            <div>
                                <h3 class="text-gray-50 uppercase dark:text-white">Productos</h3>
                                <a href="#"
                                    class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">Helados</a>
                                <a href="#"
                                    class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">Comidas</a>
                                <a href="#"
                                    class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">Bebidas</a>
                            </div>

                            <div>
                                <h3 class="text-gray-50 uppercase dark:text-white">Contactanos</h3>
                                <span class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">+1
                                    526 654 8965</span>
                                <span
                                    class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">example@email.com</span>
                                <span class="block mt-2 text-sm text-gray-300 dark:text-gray-400 hover:underline">Calle
                                    25 #5-60</span>

                            </div>
                        </div>
                    </div>
                </div>

                <hr class="h-px my-1 bg-gray-300 border-none dark:bg-gray-700">
                <div class="bottom-0">
                    <p class="text-center text-gray-400 dark:text-white">© TSalasH Heladería del Parque 2022 - Todos
                        los derechos reservados</p>
                </div>
            </div>
        </footer>

</body>

</html>
