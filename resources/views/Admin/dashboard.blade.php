<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Yolan Mack</title>
    <link rel="icon" type="image" href="{{ URL('images/logo4.png') }}">
    @vite('resources/css/app.css')
</head>
<body>

<div class="w-full h-full">
    <!-- navbar-->
    @include('Admin.AdminLayouts.navbar')

    <!-- sidebar-->
    @include('Admin.AdminLayouts.sidebar')

    @yield('content')
</div>


</body>
</html>
