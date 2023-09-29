<!DOCTYPE html>
<html lang="">
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
@include('components.Header')
<div class="w-full min-h-screen bg-black flex justify-center items-center">
        <div class=" w-[600px] h-[400px] relative overflow-hidden">
            <video class="object-cover w-full h-full absolute" autoplay muted loop >
                <source src="{{ asset('videos/video5.mp4') }}" type="video/mp4" class="object-cover">
            </video>
        </div>
    <div class="w-full h-screen absolute z-2 flex justify-center items-center">
        <h1 class="text-white text-2xl">hello world</h1>
    </div>
</div>

</body>
</html>

