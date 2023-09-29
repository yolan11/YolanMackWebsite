<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    @vite('resources/css/header.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>
<body>
<header class="z-10 w-full h-[80px] flex justify-between items-center px-10 fixed">
    <div class="w-full h-full flex justify-start items-center">
        <a href="{{ route('Accueil') }}" class="w-auto h-1/2">
            <img src="{{ URL('images/logo2.png') }}" alt="" class="w-auto h-full">
        </a>
    </div>
    <ul >
        <li>
            <a href="{{ route('Accueil') }}" data-text="Accueil" class="{{ Request::is('/') ? 'active' : '' }}">Accueil</a>
        </li>
        <li>
            <a href="#" data-text="Galerie" class="{{ Request::is('galerie') ? 'active' : '' }}">Galerie</a>
        </li>
        <li>
            <a href="{{ route('Contact') }}" data-text="Contact" class="{{ Request::is('Contact') ? 'active' : '' }}">Contact</a>
        </li>
        <li>
            <a href="{{ route('Reservation') }}" data-text="Reserver" class="{{ Request::is('Reservation') ? 'active' : '' }} reserver">Reserver</a>
        </li>
    </ul>



</header>
</body>
</html>
