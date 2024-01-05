<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yolan Mack - 404</title>
    <link rel="icon" type="image" href="{{ URL('images/logo.png') }}">

    @vite('resources/css/app.css')
</head>
<body class="bg-white">
<div class="flex h-screen items-center justify-center">
    <div class="text-center">
        <h1 class="text-xl font-bold text-gray-800 mb-4">404</h1>
        <p class="text-2xl text-gray-600 mb-8">Page non trouvée</p>
        <a href="/" class="inline-block bg-black hover:bg-white text-white hover:text-black font-bold py-2 px-4 rounded">
            Retour à la page d'accueil
        </a>
    </div>
</div>
</body>
</html>
