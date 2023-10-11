<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yolan Mack</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>
<body class="">
@include('Layouts.Header')


<div class="w-full h-full flex flex-col items-center justify-center bg-white">
    <div class="w-full h-screen pt-20 pb-6">
        <div name="video" class="w-full h-full">
            <div class="w-full h-full">
                <div class="w-full h-full overflow-hidden relative flex items-center justify-center bg-fixed">
                    <video class="object-cover w-full h-full absolute" autoplay muted loop>
                        <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
                    </video>
                    <div class="relative w-full h-full flex justify-center items-center">
                        <a href="{{ route('Reservation') }}">
                            <div class=" w-[900px] h-[200px] p-4 flex justify-center items-center flex-col">
                                <h1 class="text-white text-3xl py-2 uppercase text-center font-semibold ">un évènement ? un
                                    dj ? yolan mack vous propose des prestations adaptées à vos besoins</h1>
                                <a href="{{ route('Reservation') }}"
                                   class="hover:text-white text-gray-300 py-2 uppercase flex justify-center items-center font-bold">Reserver
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25"/>
                                    </svg>
                                </a>
                            </div>
                            <a href="#view2" class="hidden">
                                <div class="scroll-down"></div>
                            </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full h-full flex flex-col px-6 bg-white flex justify-center items-center">
        <div class="w-4/5 h-[400px] flex flex-col justify-center">
            <h1 class="text-black uppercase text-3xl py-4 text-center">Pourquoi nous choisir ?</h1>
            <p class="reveal test1 text-black text-xl font-light text-center">Profitez d’un son exceptionnel grâce aux deux enceintes haut de
                gamme
                Electro-Voice, leader dans le domaine de la sonorisation, pour sublimer vos événements intérieurs
                ou extérieurs. Ajoutez une puissance de basse incroyable à votre expérience sonore grâce au caisson
                de basse haut de gamme DB Technologie, une filiale du groupe RCF.
                Découvrez des performances sonores remarquables grâce à mes enceintes de 1200 W et laissez-vous
                transporter par les vibrations immersives du caisson de basse de 1200 W. Ne passez pas inaperçu et
                faites-vous entendre grâce à un microphone sans fil de qualité!</p>
        </div>
</div>

<div class="w-full h-full px-6 py-10 flex flex-col bg-white">
    <div class="w-full h-20 ">
        <h1 class="text-black uppercase text-3xl">Type d'évènement</h1>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="group col-span-1 w-full h-full">
            <a href="https://compiegne-triathlon.assoconnect.com/page/1984632-presentation">
                <div class="relative aspect-square w-6/6 overflow-hidden">
                        <img src="{{ URL('images/imageCarouselPrestations/image2.jpg') }}" alt="" class="absolute w-full h-full object-cover group-hover:scale-110 duration-200 group-hover:duration-200">
                </div>
                <div class="w-full flex flex-col justify-center items-center py-2">
                    <h1 class="w-full uppercase text-xs text-center font-medium ">Evenement public</h1>
                    <p class="w-full uppercase text-xs text-center flex justify-center items-center ">Compiègne Triathlon édition 2023
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
            <a href="https://www.moyvillers.fr/">
                <div class="relative aspect-square w-6/6 overflow-hidden">
                    <img src="{{ URL('images/imageCarouselPrestations/image3.jpg') }}" alt="" class="absolute w-full h-full object-cover group-hover:scale-110 duration-200 group-hover:duration-200">
                </div>
                <div class="w-full flex flex-col justify-center items-center py-2">
                    <h1 class="w-full uppercase text-xs text-center font-medium ">Evenement public</h1>
                    <p class="w-full uppercase text-xs text-center flex justify-center items-center ">Fete du village Moyvillers edition 2023
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
                    <img src="{{ URL('images/imageCarouselPrestations/image5.jpg') }}" alt="" class="absolute w-full h-full object-cover group-hover:scale-110 duration-200 group-hover:duration-200">
                </div>
                <div class="w-full flex flex-col justify-center items-center py-2">
                    <h1 class="w-full uppercase text-xs text-center font-medium ">Evenement prive</h1>
                    <p class="w-full uppercase text-xs text-center flex justify-center items-center ">Anniversaire 18 ans
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25"/>
                        </svg>
                    </p>
                </div>
        </div>

    </div>
</div>

<div class="w-full h-[700px] p-6 bg-white">
    <div class="bg-amber-50 w-full h-full flex justify-center items-center">
        <div class="grid grid-cols-3">
            <div class="col-span-1 aspect-square w-full bg-black"></div>
            <div class="col-span-1 aspect-square w-full"></div>
            <div class="col-span-1 aspect-square w-full"></div>
        </div>
    </div>
</div>


<footer class="bg-black w-full h-screen flex flex-col justify-center items-center">
    <div class="h-60 flex justify-center items-center">
        <h1 class="text-white uppercase text-8xl ">Yolan mack</h1>
    </div>
    <div class="w-3/6 h-60 flex ">
        <div class="w-3/5 flex flex-col items-start">
            <h1 class="text-white text-2xl uppercase">Contacts</h1>
            <p class="text-white">Contact@yolanmack.com</p>
            <p class="text-white"> 06 64 56 87 89</p>
            <p class="text-white"> Rue nationale, Lacroix Saint Ouen - FRANCE </p>
        </div>
        <div class="w-2/5 flex flex-col items-start">
            <h1 class="text-2xl text-white uppercase">Nous retrouver</h1>
            <a href="">
                <p class="text-white hover:text-gray-300">Instagram</p>
            </a>
            <a href="">
                <p class="text-white hover:text-gray-300">Facebook</p>
            </a>
            <a href="">
                <p class="text-white hover:text-gray-300">Youtube</p>
            </a>
            <a href="">
                <p class="text-white hover:text-gray-300">Whatsapp</p>
            </a>
        </div>
    </div>
    <div class="flex ">
        <p class="text-white font-bold">© 2023 Yolan Mack</p>
        <a href="#">
            <p class="text-red-300 hover:text-gray-300">Mentions légales</p>
        </a>
    </div>
</footer>


</body>
</html>
