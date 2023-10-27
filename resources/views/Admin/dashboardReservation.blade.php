<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - reservation - Yolan Mack</title>
    <link rel="icon" type="image" href="{{ URL('images/logo4.png') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-full h-full">
    <!-- navbar-->
    @include('Admin.AdminLayouts.navbar')

    <!-- sidebar-->
    @include('Admin.AdminLayouts.sidebar')

    <section id="content" class="z-10 ml-[280px] h-[1000px] px-6 py-6 mt-[60px] bg-gray-300">
        <div class="w-full h-full flex">
            <div class="w-full flex flex-col p-6 gap-4">
                <table class="w-full flex flex-col bg-white">
                    <thead class="w-full">
                    <tr class="w-full flex">
                        <td class="w-full border border-black">Nom</td>
                        <td class="w-full border border-black">Prénom</td>
                        <td class="w-full border border-black">Email</td>
                        <td class="w-full border border-black">Numéro de téléphone</td>
                        <td class="w-full border border-black">Type d'évènement</td>
                        <td class="w-full border border-black">Lieu de l'évènement</td>
                        <td class="w-full border border-black">Date de l'évènement</td>
                        <td class="w-full border border-black">Numéro de rue</td>
                        <td class="w-full border border-black">Nom de rue</td>
                        <td class="w-full border border-black">Ville</td>
                        <td class="w-full border border-black">Pays</td>
                        <td class="w-full border border-black">Informations</td>
                    </tr>
                    </thead>
                    <tbody class="w-full">
                        <tr class="w-full flex">
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->familyName }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->firstName }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->email }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->phoneNumber }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->eventType }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->eventLocation }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->eventDate }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->streetNumber }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->streetName }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->city }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->country }}</p></td>
                            <td class="w-1/12 border border-black"><p class="w-full h-full  overflow-wrap break-word">{{ $event->information }}</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
</body>
