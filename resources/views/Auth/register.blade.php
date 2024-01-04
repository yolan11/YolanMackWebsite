<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="icon" type="image" href="{{ URL('images/logo4.png') }}">
    @vite('resources/css/app.css')

</head>
<body>
<div class="w-full h-screen flex items-center justify-center">
    <div class="w-1/5 h-3/6 flex flex-col items-center justify-center">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <img src="{{ URL('images/logo4.png') }}" alt="Logo1" class="logo1 h-10 w-auto justify-enter items-center">
        <form method="POST" action="{{ route('Register.store') }}">
            @csrf
            <input name="name" id="name" type="text" placeholder="Nom" class="mt-4 py-3 w-full border border-gray-400
             py-1 px-2" required>
            <input name="email" id="email" type="email" placeholder="Email" class="mt-4 py-3 w-full border
            border-gray-400 py-1 px-2" required>
            <input name="password" id="password" type="password" placeholder="Mot de passe" class="mt-4 py-3 w-full
             border border-gray-400 py-1 px-2" required>
            <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirmation
             de mot de passe" class="mt-4 py-3 w-full border border-gray-400 py-1 px-2" required>
            <div class="mt-5">
                <button class="w-full bg-[black] py-3 text-center text-white" type="submit">S'inscrire</button>
            </div>
        </form>
        <a class="mt-5 w-full" href="{{ route('Login.create') }}">
            <button class="w-full bg-[black] py-3 text-center text-white" type="submit">Se connecter</button>
        </a>
    </div>
</div>
</body>
</html>
