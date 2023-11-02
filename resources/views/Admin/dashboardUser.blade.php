<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Utilisateurs - Yolan Mack</title>
    <link rel="icon" type="image" href="{{ URL('images/logo4.png') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-full h-full">
    <!-- navbar-->
    @include('Admin.AdminLayouts.navbar')

    <!-- sidebar-->
    @include('Admin.AdminLayouts.sidebar')

    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <!--Tableau-->
        <div class="w-full h-full flex">
            <div class="w-full h-full overflow-y-scroll flex flex-col gap-4">
                <table class="table-auto  border-collapse border border-slate-400">
                    <thead class=" bg-gray-200">
                    <tr class="">
                        <th class="border border-slate-300 p-4">Nom</th>
                        <th class="border border-slate-300 p-4">Email</th>
                        <th class="border border-slate-300 p-4">Mot de passe</th>
                        <th class="border border-slate-300 p-4">Modifier</th>
                        <th class="border border-slate-300 p-4">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach ($users as $user)
                        <tr class="py-4">
                            <td class="border border-slate-300 p-4">{{ $user->name }}</td>
                            <td class="border border-slate-300 p-4">{{ $user->email }}</td>
                            <td class="border border-slate-300 p-4">{{ $user->password }}</td>
                            <td class="border border-slate-300"><button class="w-full p-4 h-full bg-blue-300">Modifier</button></td>
                            <td class="border border-slate-300"><button class="w-full p-4 h-full bg-red-300">Supprimer</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
</body>
</html>
