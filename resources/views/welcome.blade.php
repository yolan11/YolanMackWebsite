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

    <script src="{{ asset('js/scrollButton.js') }}" defer></script>
    <script src="{{ asset('js/soundButton.js') }}" defer></script>
    <script src="https://player.vimeo.com/api/player.js" defer></script>

    <style>
        /* Makes a fixed background wrapper
which the user cannot interact with */

        .iframe-wrapper {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        /* Make the iframe keep an aspect ratio, and
        position it in the middle of its parent wrapper*/

        .iframe-wrapper iframe {
            width: 100vw;
            height: 56.25vw; /* Given a 16:9 aspect ratio, 9/16*100 = 56.25 */
            min-height: 100vh;
            min-width: 177.77vh; /* Given a 16:9 aspect ratio, 16/9*100 = 177.77 */
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

</head>
<body class="bg-white">
@include('Layouts.Header')

<div id="landingVideo" class="w-full h-full flex flex-col items-center justify-center bg-white">
    <div class="w-full h-screen pt-20">
        <div name="video" class="w-full h-full">
            <div class="w-full h-full">
                <div class="w-full h-full bg-black overflow-hidden relative flex items-center justify-center bg-fixed">
                    <div class="w-full h-full absolute">
                        <div class="iframe-wrapper">
                            <iframe src="https://player.vimeo.com/video/881747373?h=734a418794&background=1"></iframe>
                        </div>
                    </div>
                    <div class=" relative w-full h-full flex justify-center items-center">

                            <div class="z-1 w-full h-full flex items-center justify-center">
                                <a href="{{ route('Reservation') }}" class="group w-11/12 sm:w-10/12 md:w-9/12 h-[150px] flex justify-center items-center flex-col">
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
                                </a>
                            </div>
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
        <p class="text-black text-lg sm:text-2xl font-light sm:text-center tracking-[0.01em] w-full lg:w-10/12">"Passionné de musique,
            nous vous assurons une
            expérience musicale inoubliable ! Nos tarifs compétitifs, un système son de pointe, et des effets
            lumineux de qualités garantissent une ambiance exceptionnelle pour tous vos événements,
            qu'ils soient privés ou publics."
        </p>
    </div>
</div>

<div class="w-full h-full px-6 py-10 flex flex-col bg-white">
    <div class="w-full h-full ">
        <h1 class="text-black text-2xl sm:text-4xl py-4">Nous intervenons sur tout <br> types d'évènements.</h1>
    </div>
    <div class="col-span-1 w-full h-full aspect-video sm:w-full sm:h-[80vh] overflow-hidden carousel2">
        <div class="w-full h-full group relative flex" id="image1">
            <img src="{{ URL('images/event/18ans.jpg') }}" alt="Image 1" class="w-full h-full object-cover
                    transition duration-200 group-hover:scale-105 group-hover:duration-200 group-hover:transition">
            <h1 class="m-6 w-auto h-auto text-white text-3xl sm:text-6xl absolute top-0 left-0 z-10
                     mix-blend-difference">Anniversaire
            </h1>

        </div>
        <div class="w-full h-full hidden group relative flex" id="image2">
            <img src="{{ URL('images/event/19ans.jpg') }}" alt="Image 2" class="w-full h-full
                    object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                    group-hover:transition">
            <h1 class="m-6 w-auto h-auto text-white text-3xl sm:text-6xl absolute top-0 right-0 z-10
                     mix-blend-difference">Fete de village
            </h1>

        </div>
        <div class="w-full h-full hidden group relative flex" id="image3">
            <img src="{{ URL('images/event/60ans.jpg') }}" alt="Image 3" class="w-full h-full
                    object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                    group-hover:transition">
            <h1 class="m-6 w-auto h-auto text-white text-3xl sm:text-6xl absolute bottom-0 right-0 z-10
                     mix-blend-difference">Mariage
            </h1>

        </div>
        <div class="w-full h-full hidden group relative flex" id="image4">
            <img src="{{ URL('images/event/evenementSportif.jpg') }}" alt="Image 4" class="w-full h-full
                     object-cover transition duration-200 group-hover:scale-105 group-hover:duration-200
                     group-hover:transition">
            <h1 class="m-6 w-auto h-auto text-white text-3xl sm:text-6xl absolute bottom-0 left-0 z-10
                     mix-blend-difference">Evènement sportif
            </h1>
        </div>
    </div>

</div>

<div class="w-full px-6 pt-6 flex justify-start items-center">
    <div class="w-9/12 flex justify-end items-center"></div>
    <div class="w-96 flex flex-col">
        <div class="w-full">
            <h1 class="font-bold uppercase my-4 text-sm sm:text-base">Notre matériel</h1>
        </div>
        <div class="w-full">
            <p class=" text-lg sm:text-4xl ">
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
            <img src="{{ URL('images/brandCarousel/behringerLogo.svg') }}" alt="" class="w-32">
        </div>
        <div class="slide">
            <img src="{{ URL('images/brandCarousel/dbtechnologiesLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/brandCarousel/electroVoiceLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/brandCarousel/pioneerdjLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/brandCarousel/thomannLogo.svg') }}" alt="" class="w-40">
        </div>


        <!-- 5 first slides (doubled)-->

        <div class="slide">
            <img src="{{ URL('images/brandCarousel/behringerLogo.svg') }}" alt="" class="w-32">
        </div>
        <div class="slide">
            <img src="{{ URL('images/brandCarousel/dbtechnologiesLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/brandCarousel/electroVoiceLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/brandCarousel/pioneerdjLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/brandCarousel/thomannLogo.svg') }}" alt="" class="w-40">
        </div>
    </div>
</div>

@include('Layouts.Footer')
<script>
    function setupCarousel(carouselContainer) {
        let currentIndex = 0;

        function nextSlide() {
            const slides = carouselContainer.children;

            // Ajouter la classe 'hidden' à la diapositive actuelle
            const currentSlide = slides[currentIndex];
            currentSlide.classList.add('hidden');

            // Calculer l'index de la prochaine diapositive
            currentIndex = (currentIndex + 1) % slides.length;

            // Supprimer la classe 'hidden' de la prochaine diapositive
            const nextSlide = slides[currentIndex];
            nextSlide.classList.remove('hidden');
        }

        // Appeler nextSlide à intervalles réguliers
        setInterval(nextSlide, 10000);
    }

    // Utilisation avec différentes divs carrousel
    setupCarousel(document.querySelector('.carousel1'));
    setupCarousel(document.querySelector('.carousel2'));
    setupCarousel(document.querySelector('.carousel3'));
    setupCarousel(document.querySelector('.carousel4'));


    // Ajoutez autant d'appels à setupCarousel que nécessaire pour vos divs carrousel supplémentaires

</script>
</body>
</html>
