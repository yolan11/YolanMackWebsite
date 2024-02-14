<header class="fixed z-10 w-full p-6 h-20 flex mix-blend-difference">
    <div class="w-full h-full flex justify-start items-center">
        <a href="{{ route('Accueil') }}" title="Redirection vers la page d'accueil" class="w-auto ">
            <img src="{{ URL('images/logo2.png') }}" alt="Logo du site" class="h-8 w-auto justify-enter items-center">
        </a>
    </div>
    <div class="w-full h-full flex justify-end items-center">
        <a href="{{ route('Accueil') }}" title="Redirection vers la page d'accueil" data-text="Galerie" class="text-white font-normal text-xl md:text-2xl
         {{ Request::is('/') ? 'active' : '' }}">
            Accueil,
        </a>
        <a href="{{ route('Gallery') }}" title="Redirection vers la page gallerie" data-text="Contact" class=" text-white font-normal text-xl md:text-2xl pl-1
         {{ Request::is('Gallery') ? 'active' : '' }}">
            Galerie,
        </a>
        <a href="{{ route('Reservation') }}" title="Redirection vers la page reserver" data-text="Reserver" class=" text-white font-normal text-xl md:text-2xl
         pl-1 {{ Request::is('Reservation') ? 'active' : '' }}">
            Réservations.
        </a>
    </div>
</header>
