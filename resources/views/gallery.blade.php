<!doctype html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallerie - Yolan Mack</title>
    <link rel="icon" type="image/x-icon" href="{{ URL('images/logo.png') }}" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="{{ URL('images/logo.png') }}" sizes="192x192">

    <meta name="description" content="Découvrez des photos de nos évènements">


    @vite('resources/css/app.css')

    <script defer>
        window.axeptioSettings = {
            clientId: "65c20a33673b95fb5fbc8c03",
        };

        (function(d, s) {
            var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
            e.async = true; e.src = "//static.axept.io/sdk.js";
            t.parentNode.insertBefore(e, t);
        })(document, "script");
    </script>
</head>
<body class="bg-white">

@include('Layouts.Header')

<div class="w-full min-h-screen flex">
    <div class="w-full h-full px-6 py-20 md:p-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ">
            @foreach ($images as $image)
                <div class="col-span-1 w-full h-full aspect-square overflow-hidden">
                    <div class="w-full h-full">
                        <img
                            src="{{ asset('storage/images/' .$image->name) }}"
                            alt="{{ $image->name }}"
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('Layouts.Footer')

</body>
</html>
