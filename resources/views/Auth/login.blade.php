<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="icon" type="image" href="{{ URL('images/logo.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
<div class="w-full h-screen flex items-center justify-center">
    <div class="sm:w-1/5 sm:h-3/6 flex flex-col items-center justify-center">
        <img src="{{ URL('images/logo2.png') }}" alt="Logo1" class="logo1 h-10 w-auto justify-enter items-center
         mix-blend-difference">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('Login.store') }}">
            @csrf
            <input name="email" id="email" type="email" placeholder="Email" class="mt-4 py-3 w-full border
             border-gray-400 py-1 px-2" required>
            <input name="password" id="password" type="password" placeholder="Mot de passe" class="mt-4 py-3 w-full
             border border-gray-400 py-1 px-2" required>
            <div class="mt-5">
                <button class="w-full bg-[black] py-3 text-center text-white" type="submit">Se connecter</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
