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
        @include('components.Header')
        <main class="bg-black">
            <section name="page" clas="w-full h-full">
                <div class="w-full h-screen flex items-end">
                    <div name="video" class="w-full h-screen px-10 pt-20">
                        <div class="w-full h-full overflow-hidden relative relative flex items-center justify-center">
                            <video class="object-cover w-full h-full absolute" autoplay muted loop >
                                <source src="{{ asset('videos/video5.mp4') }}" type="video/mp4">
                            </video>
                            <h1 class="text1" id="text1">Bienvenue sur le site Yolan Mack</h1>

                        </div>
                    </div>
                </div>
                <div name="content" class="p-5 w-full h-full">
                    <div class="grid lg:grid-cols-2 md:grid-cols-2">
                        <div name="" class="col-span-1 bg-white h-[600px]">

                        </div>
                        <div name="aPropos" class="col-span-1 flex justify-end">
                            <p class="text-white w-2/5 pr-28 text-2xl">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was pop</p>

                        </div>
                    </div>
                </div>
            </section>
            <section name="footer">

            </section>
        </main>


    </body>
</html>
