<header class="fixed z-10 w-full p-6 h-20 flex mix-blend-difference">
    <div class="w-full h-full flex justify-start items-center">
        <a href="{{ route('Accueil') }}" class="w-auto ">
            <img src="{{ URL('images/logo2.png') }}" alt="" class="h-8 w-auto justify-enter items-center">
        </a>
    </div>
    <ul class="w-full h-full flex justify-end items-center">
        <a href="{{ route('Accueil') }}" data-text="Galerie" class="text-white font-normal text-xl md:text-2xl
         {{ Request::is('/') ? 'active' : '' }}">
            Accueil,
        </a>
        <a href="{{ route('Gallery') }}" data-text="Contact" class=" text-white font-normal text-xl md:text-2xl pl-1
         {{ Request::is('Gallery') ? 'active' : '' }}">
            Gallerie,
        </a>
        <a href="{{ route('Reservation') }}" data-text="Reserver" class=" text-white font-normal text-xl md:text-2xl
         pl-1 {{ Request::is('Reservation') ? 'active' : '' }}">
            Reserver.
        </a>
    </ul>
</header>

