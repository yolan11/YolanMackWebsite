<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
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
