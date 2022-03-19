
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
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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
        }

        ::-webkit-scrollbar {
            display: none;
        }

        /* Non essential CSS - Just for example centering */

        html{
            background-color:#ff6f69;
            background: radial-gradient(#ff6f69, #ff8b87);
            
            /*	background-image:url('https://imagesvc.timeincapp.com/v3/mm/image?url=https%3A%2F%2Fcdn-image.travelandleisure.com%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F1600x1000%2Fpublic%2F1479854258%2Fkahaluu-bay-kona-big-island-hawaii-WRLDSNST1122.jpg%3Fitok%3DSFMX3uUf&w=800&q=85');
            background-repeat: no-repeat;
            background-size: 100%;
            background-position:50% 50%;*/
        }

        
        .border{
            padding: 5px;
            background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, #C5E7D7 34%, #88d8b0 34%);
            background-size: 400% 400%;
            height: 400px;
            background-position: 25% 50%;
            -webkit-animation: Gradient 15s ease infinite;
            -moz-animation: Gradient 5s ease infinite;
        }
        
        .inner-cutout{
            padding: 40px 0;
            display: block;
            background-color:#ff6f69;/*#ff6f69*/
                
            margin: 2%;
            padding-bottom: 40px;
            height: 300px;
            background: radial-gradient(#ff6f69, #ff8b87);
            background-size: 300%;
            background-position:50% 50%;

        }

        .knockout {
            
            vertical-align: middle;
            text-align: center;
            font-family: 'Pacifico', cursive;
            font-size:50pt;
            color: blue;
            color: #fff;
            background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, #C5E7D7 34%, #88d8b0 34%);
            background-size: 100%;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
        }
        .knockout{
            animation: Gradient 5s ease infinite;
            -webkit-animation: Gradient 15s ease infinite;
            -moz-animation: Gradient 5s ease infinite;
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
  

    <div class="relative gradient bg-black z-10 flex items-top justify-center min-h-screen h-14  sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('dashboard') }}"
                        class="text-lg font-light hover:text-blue-400 text-pink-600  dark:text-gray-500 underline">
                        Dashboard</a>

                @else
                    <a href="{{ route('login') }}"
                        class="text-lg font-light  hover:text-pink-400 text-pink-600  dark:text-sky-500 ">
                        Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-lg font-light  hover:text-pink-400 text-pink-600  dark:text-sky-500 ">
                            Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="pt-24">
            <div class=" px-3 mx-auto flex flex-wrap flex-col md:flex-row">
                <!--Left Col-->
                <div class=" flex-col w-full mt-28 md:w-2/5 justify-center items-start text-center md:text-center">
                    <p  class="uppercase text-2xl  text-center w-full">¡Bienvenid@s a Heladeria y comidas rápidas !</p>
                    <h1 style="font-family: 'Pacifico', cursive;" class="my-7 text-6xl animate-pulse text-center text-sky-600 font-semibold">
                        TsalasH
                    </h1>
                    <p class="leading-normal text-xl text-center mb-8">
                        Los mejores helados, ensaladas de fruta <br>
                        y más en delicias del parque
                    </p>
                    <button
                        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        @guest
                            <a href=" {{ route('register') }} ">Registrate ahora!</a>
                        @endguest
                        @auth
                            <a href=" {{ route('dashboard') }}  ">Vamos!</a>
                        @endauth
                    </button>
                </div>
                <!--Right Col-->
                <div class="w-full  md:w-3/5 py-6 text-center">
                    <img class="rounded-sm w-auto brightness-125  md:w-4/5 z-10"
                        src="https://x6i2p6h3.rocketcdn.me/wp-content/uploads/2017/05/montar-una-helader%C3%ADa.jpg" />
                </div>
            </div>
        </div>

    </div>
    <div class="">  <!--break y regreso -->
        <div class = "border">
            <div class = "inner-cutout"> 
                <h1 class="knockout">Conoce más<br> de Nosotros!</h1>
            </div>
        </div>
    </div>
    <!-- Inicio NUESTROS PRODUCTOS -->

    <div class="h-screen md:grid md:grid-cols-2 grid-cols-1 bg-amber-100 ">

        <div class="col bg-brown py-32 px-10  ">
            
            <!--Inicio de carrusel-->
            <div class="swiper mySwiper  ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-center text-white text-5xl text-center">
                            <img
                                class="object-cover imgper h-full w-full  hover:brightness-110 rounded-lg "
                                src="https://cdn.pixabay.com/photo/2016/12/26/16/09/bowl-1932375_960_720.jpg"
                                alt="imagen_pixabay"
                            />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-center text-white text-5xl text-center">
                            <img
                                class="object-cover imgper w-full h-full hover:brightness-110 rounded-lg "
                                src="https://cdn.pixabay.com/photo/2018/03/17/06/25/food-3233217_960_720.jpg"
                                alt="imagen_pixabay"
                            />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-center text-white text-5xl text-center">
                            <img
                                class="object-cover imgper w-full h-full hover:brightness-110 rounded-lg "
                                src="https://cdn.pixabay.com/photo/2017/08/03/14/38/ice-cream-2576622_960_720.jpg"
                                alt="imagen_pixabay"
                            />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-center text-white text-5xl text-center">
                            <img
                                class="object-cover imgper w-full hover:brightness-110 rounded-lg "
                                src="https://cdn.pixabay.com/photo/2016/07/21/11/17/drink-1532300_960_720.jpg"
                                alt="imagen_pixabay"
                            />
                        </div>
                    </div>


                </div>

            

            </div> 
        </div>
         
        <div class="col my-auto h-96 mx-3 py-20 text-orange-900 text-lg px-10 text-justify rounded-lg justify-center ">
            <h3 style="font-family: 'Pacifico', cursive;" class=" text-5xl pb-5 font-medium text-center ">Nuestros Productos</h3>
            <p class="text-2xl font-extralight  " >Contamos con una gran variedad de Helados, Comidas rapidas y Bebidas para toda ocación 
                con una gran seleccion personalizable para todos los gustos.
            </p>
        </div>
        
    </div>
    <!-- Fin NUESTROS PRODUCTOS -->
    

    <div>
        <div class="swiper mySwiper  ">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="block  md:mt-0 text-white font-bold text-5xl text-center">
                        <img
                            class="object-cover w-full h-100 brightness-90"
                            src="https://cdn.pixabay.com/photo/2016/03/05/21/45/pizza-1239077_960_720.jpg"
                            alt="imagen_pixabay"
                        />
                        <div class="centrado sombra">Los mejores ingredientes a la orden del dia</div>
                    </div> 
                </div>

                <div class="swiper-slide">
                    <div class="block  md:mt-0 text-white font-bold text-5xl text-center">
                        <img
                            class="object-cover w-full h-100 brightness-90"
                            src="https://cdn.pixabay.com/photo/2018/08/16/22/59/ice-cream-3611698_960_720.jpg"
                            alt="imagen_pixabay"
                        />
                        <div class="centrado sombra">Disfruta en nuestro local o desde la comodidad de tu casa</div>
                    </div> 
                </div>
               
                <div class="swiper-slide">
                    <div class="block  md:mt-0 text-white font-bold text-5xl text-center">
                        <img
                            class="object-cover w-full h-100 brightness-90"
                            src="https://cdn.pixabay.com/photo/2016/03/05/19/02/hamburger-1238246_960_720.jpg"
                            alt="imagen_pixabay"
                        />
                        <div class="centrado sombra">Puedes seleccionar en nuestra gran variedad de menú</div>
                    </div> 
                </div>
            
                <!--no me acordaba como cuadre esto aqui xD-->
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination pb-6"></div>
        </div>
      

    </div>
    



    <!-- Inicio Quienes Somos -->
    <div class="md:grid md:grid-cols-2 grid-cols-1 bg-blue-200 ">

        <div class="col my-auto mx-3 py-28 text-gray-900 text-lg px-10  text-justify rounded-lg  ">
            <h3 style="font-family: 'Pacifico', cursive;" class=" text-5xl text-center pb-5 font-semibold ">¿Quienes Somos?</h3>
            <p class="text-2xl font-extralight">Somos un restaurante de comidas rápidas y heladería que nació de un emprendimiento familiar y gracias a la aceptación del publico hemos crecido en el municipio de Rovira para ofrecer los mejores productos a todo nuestros clientes.</p>
            <p> </p>
        </div>
        
        <div class="col my-auto  bg-blue-400 py-28 text-white text-lg  text-justify  ">
            <h3 style="font-family: 'Pacifico', cursive;" class=" text-5xl text-center pb-5 font-medium ">
                Conoce nuestro local
            </h3>

            <p class="text-2xl font-light text-center py-2">
                Disfruta en familia, en pareja o juntos a los que mas quieres.
            </p>

            <div class="mx-auto"  style="width:610px">
                <iframe  autoplay allow="fullscreen" frameBorder="0" height="480" src="https://giphy.com/embed/Qa1wpSe2G0HLPpRnth/video?autoplay=1&loop=1&autopause=0" width="640"></iframe>
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


    
    <footer class="gradient-2 p-7">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex">
                <div class="w-full -mx-6 lg:w-2/5">
                    <div class="px-6">
                        <div>
                            <a href="#" class="text-xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">T salas H</a>
                        </div>
                        
                        <p class="max-w-md mt-2 text-gray-500 dark:text-gray-400">Estamos ubicados en el municipio de Rovira en el departamento del Tolima</p>
                        
                        <div class="flex mt-4 -mx-2">
                            <a href="#" class="mx-2 text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400" aria-label="Linkden">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"/>
                                </svg>
                            </a>
    
                            <a href="#" class="mx-2 text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400" aria-label="Facebook">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"/>
                                </svg>
                            </a>
    
                            <a href="#" class="mx-2 text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400" aria-label="Twitter">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="mt-6 lg:mt-0 lg:flex-1">
                    <div class="grid grid-cols-2 gap-5 sm:grid-cols-3 md:grid-cols-3">
                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Acerca de Nosotros</h3>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Company</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">community</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Careers</a>
                        </div>
    
                        
    
                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Productos</h3>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Helados</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Comidas</a>
                            <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Bebidas</a>
                        </div>
    
                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Contactanos</h3>
                            <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">+1 526 654 8965</span>
                            <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">example@email.com</span>
                            <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Calle 25 #5-60</span>

                        </div>
                    </div>
                </div>
            </div>
    
            <hr class="h-px my-6 bg-gray-300 border-none dark:bg-gray-700">
    
            <div>
                <p class="text-center text-gray-800 dark:text-white">© TSalasH Heladería del Parque 2022 - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
    

</body>

</html>
