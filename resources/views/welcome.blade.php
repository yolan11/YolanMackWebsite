<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yolan Mack - DJ Compiègne - Évènementiel, Soirées, Mariages</title>
    <link rel="icon" type="image" href="{{ URL('images/logo.png') }}">

    <!-- SEO website -->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Yolan Mack - DJ Compiègne - Évènementiel, Soirées, Mariages">
    <meta property="og:description" content="Yolan Mack est un DJ amateur spécialisé dans les soirées, mariages
     et évènements. Basé à Lacroix Saint Ouen près de Compiègne. Solutions techniques, mix, sound system.">
    <meta property="og:url" content="https://yolanmack.com/">
    <meta property="og:site_name" content="Yolan Mack">

    @vite('resources/css/app.css')
    @vite('resources/css/slider.css')


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">


</head>
<body class="bg-white">
@include('Layouts.Header')

<div id="landingVideo" class="w-full h-full flex flex-col items-center justify-center bg-white">
    <div class="w-full h-screen pt-20">
        <div name="video" class="w-full h-full">
            <div class="w-full h-full">
                <div class="w-full h-full bg-black overflow-hidden relative flex items-center justify-center bg-fixed">
                    <video class="object-cover w-full h-full absolute" autoplay muted loop preload="auto">
                        <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
                    </video>
                    <div class=" relative w-full h-full flex justify-center items-center">
                        <a href="{{ route('Reservation') }}" class="z-1 w-full h-full flex items-center justify-center">
                            <div
                                class=" group w-11/12 sm:w-10/12 md:w-9/12 h-[150px] flex justify-center items-center flex-col">
                                <h1 class="text-white text-2xl  sm:text-4xl  lg:text-5xl lg:leading-[57px]  py-2 text-center font-semibold duration-500">
                                    Bienvenue sur le site de la société Yolan Mack, DJ généraliste basé près de
                                    compiègne</h1>
                                <p class="group-hover:text-white group-hover:font-medium text-gray-300 py-2 mt-10 uppercase flex justify-center items-center text-lg">
                                    Je Reserve
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-4 h-4 group">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25"/>
                                    </svg>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="absolute bottom-0 right-0 p-6 hidden sm:flex">
                        <button class="buttonMute bg-white w-10 h-10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-4 h-4">
                                <path
                                    d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06zM18.584 5.106a.75.75 0 011.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 11-1.06-1.06 8.25 8.25 0 000-11.668.75.75 0 010-1.06z"/>
                                <path
                                    d="M15.932 7.757a.75.75 0 011.061 0 6 6 0 010 8.486.75.75 0 01-1.06-1.061 4.5 4.5 0 000-6.364.75.75 0 010-1.06z"/>
                            </svg>
                        </button>
                        <button class="buttonUnMute bg-white w-10 h-10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-4 h-4">
                                <path
                                    d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06zM17.78 9.22a.75.75 0 10-1.06 1.06L18.44 12l-1.72 1.72a.75.75 0 001.06 1.06l1.72-1.72 1.72 1.72a.75.75 0 101.06-1.06L20.56 12l1.72-1.72a.75.75 0 00-1.06-1.06l-1.72 1.72-1.72-1.72z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute bottom-6 p-2">
                        <div class="w-10 h-10 justify-center items-center">
                            <a href="" id="scrollToSection2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="aPropos" class="w-full h-full flex flex-col px-6 bg-white flex justify-center items-center">
    <div class="w-full xl:w-9/12 h-full flex flex-col justify-start items-center py-14 sm:py-20">
        <p class="text-black text-lg sm:text-2xl font-light sm:text-center tracking-[0.01em] w-full lg:w-10/12">Passionné de musique,
            je vous assure une
            expérience musicale inoubliable ! Mes tarifs compétitifs, un système son de pointe, et des effets
            lumineux de qualités garantissent une ambiance exceptionnelle pour tous vos événements,
            qu'ils soient privés ou publics.
        </p>
    </div>
</div>

<div class="w-full h-full px-6 py-10 flex flex-col bg-white">
    <div class="w-full h-full ">
        <h1 class="text-black text-2xl sm:text-5xl font-medium py-4">Nous intervenons sur des <br> types d'évènements variés.</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 gap-y-20">
        <div class="group col-span-1 w-full h-full">
            <a href="https://compiegne-triathlon.assoconnect.com/page/1984632-presentation" target="_blank">
                <div class="relative aspect-square w-6/6 overflow-hidden">
                    <img src="{{ URL('images/imageCarouselPrestations/image2.jpg') }}" alt=""
                         class="absolute w-full h-full object-cover group-hover:hidden">
                    <video class="object-cover w-full h-full hidden group-hover:flex" autoplay muted loop
                           preload="auto">
                        <source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="w-full flex flex-col justify-center items-center py-2">
                    <h1 class="w-full uppercase text-xs text-center font-medium ">Evenement public</h1>
                    <p class="w-full uppercase text-xs text-center flex justify-center items-center ">Compiègne
                        Triathlon édition 2023
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25"/>
                        </svg>
                    </p>
                </div>
            </a>
        </div>
        <div class="group col-span-1 w-full h-full">
            <a href="https://www.moyvillers.fr/" target="_blank">
                <div class="relative aspect-square w-6/6 overflow-hidden">
                    <img src="{{ URL('images/imageCarouselPrestations/image3.jpg') }}" alt=""
                         class="absolute w-full h-full object-cover group-hover:hidden">
                    <video class="object-cover w-full h-full hidden group-hover:flex" autoplay muted loop
                           preload="auto">
                        <source src="{{ asset('videos/video4.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="w-full flex flex-col justify-center items-center py-2">
                    <h1 class="w-full uppercase text-xs text-center font-medium ">Evenement public</h1>
                    <p class="w-full uppercase text-xs text-center flex justify-center items-center ">Fete du village
                        Moyvillers edition 2023
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25"/>
                        </svg>
                    </p>
                </div>
            </a>
        </div>
        <div class="group col-span-1 w-full h-full">
            <div class="relative aspect-square w-6/6 overflow-hidden">
                <img src="{{ URL('images/imageCarouselPrestations/image5.jpg') }}" alt=""
                     class="absolute w-full h-full object-cover group-hover:hidden">
                <video class="object-cover w-full h-full hidden group-hover:flex" autoplay muted loop
                       preload="auto">
                    <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="w-full flex flex-col justify-center items-center py-2">
                <h1 class="w-full uppercase text-xs text-center font-medium ">Evenement prive</h1>
                <p class="w-full uppercase text-xs text-center flex justify-center items-center ">Anniversaire 18 ans
                </p>
            </div>
        </div>
        <div class="group col-span-1 w-full h-full">
            <div class="relative aspect-square w-6/6 overflow-hidden">
                <img src="{{ URL('images/imageCarouselPrestations/image7.jpg') }}" alt=""
                     class="absolute w-full h-full object-cover group-hover:hidden">
                <video class="object-cover w-full h-full hidden group-hover:flex" autoplay muted loop
                       preload="auto">
                    <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="w-full flex flex-col justify-center items-center py-2">
                <h1 class="w-full uppercase text-xs text-center font-medium ">Evenement prive</h1>
                <p class="w-full uppercase text-xs text-center flex justify-center items-center ">Nos d'or
                </p>
            </div>
        </div>
    </div>
</div>

<div class="w-full px-6 pt-6 flex justify-start items-center">
    <div class="w-9/12 flex justify-end items-center"></div>
    <div class="w-96 flex flex-col">
        <div class="w-full">
            <h1 class="font-medium uppercase my-4 text-sm sm:text-base">Notre matériel</h1>
        </div>
        <div class="w-full">
            <p class=" text-lg sm:text-2xl ">
                Afin de vous garentir des prestations d'exceptions nous achetons du matériel de marques reconnus et
                fiable au près de distributeurs Européen .
            </p>
        </div>
    </div>
</div>

<div class="slider">
    <div class="slide-track">
        <!-- 5 first slides -->
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/behringerLogo.svg') }}" alt="" class="w-32">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/dbtechnologiesLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/electroVoiceLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/pioneerdjLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/thomannLogo.svg') }}" alt="">
        </div>


        <!-- 5 first slides (doubled)-->

        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/behringerLogo.svg') }}" alt="" class="w-32">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/dbtechnologiesLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/electroVoiceLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/pioneerdjLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/thomannLogo.svg') }}" alt="">
        </div>
    </div>
</div>

@include('Layouts.Footer')
<script src="{{ asset('js/scrollButton.js') }}"></script>
<script src="{{ asset('js/soundButton.js') }}"></script>
</body>
</html>
