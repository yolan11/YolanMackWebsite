<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-full h-screen flex items-center justify-center">
    <div class="w-1/5 h-3/6 flex flex-col items-center justify-center">
        <img src="{{ URL('images/logoSiteWeb/logo1.png') }}" alt="Logo1" class="logo1 h-10 w-auto justify-enter items-center">
        @if (session('success'))
            <div class="w-full bg-yellow-400 alert alert-success flex justify-center items-center">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('Login.store') }}">
            @csrf
            <input name="email" id="email" type="email" placeholder="Email" class="mt-4 py-3 w-full border border-gray-400 py-1 px-2" required>
            <input name="password" id="password" type="password" placeholder="Mot de passe" class="mt-4 py-3 w-full border border-gray-400 py-1 px-2" required>
            <div class="mt-5">
                <button class="w-full bg-[black] py-3 text-center text-white" type="submit">Se connecter</button>
            </div>
        </form>
        <a class="mt-5 w-full" href="{{ route('Register.create') }}">
            <button class="w-full bg-[black] py-3 text-center text-white" type="submit">Créer un compte</button>
        </a>
    </div>
</div>
</body>
</html>
