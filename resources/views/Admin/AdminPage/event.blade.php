@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <!--Tableau-->
        <div class="w-full h-full flex">
            <div class="w-full h-full overflow-y-scroll flex flex-col gap-4">
                <table class="table-auto  border-collapse border border-slate-400">
                    <thead class=" bg-gray-200">
                    <tr class="">
                        <th class="border border-slate-300 p-4">Nom</th>
                        <th class="border border-slate-300 p-4">Prénom</th>
                        <th class="border border-slate-300 p-4">Email</th>
                        <th class="border border-slate-300 p-4">Numéro de téléphone</th>
                        <th class="border border-slate-300 p-4">Voir plus</th>
                        <th class="border border-slate-300 p-4">Modifier</th>
                        <th class="border border-slate-300 p-4">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach ($events as $event)
                        <tr class="py-4">
                            <td class="border border-slate-300 p-4">{{ $event->familyName }}</td>
                            <td class="border border-slate-300 p-4">{{ $event->firstName }}</td>
                            <td class="border border-slate-300 p-4">{{ $event->email }}</td>
                            <td class="border border-slate-300 p-4">{{ $event->phoneNumber }}</td>
                            <td class="border border-slate-300"><button class="w-full p-4 bg-green-300">Voir plus</button></td>
                            <td class="border border-slate-300"><button class="w-full p-4 h-full bg-blue-300">Modifier</button></td>
                            <td class="border border-slate-300"><button class="w-full p-4 h-full bg-red-300">Supprimer</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--Modal Evenement entier-->
        <div id="myModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Informations détaillées</p>
                        <button id="modalClose" class="text-3xl leading-none hover:opacity-75">×</button>
                    </div>
                    <p>Nom : <span id="modalFamilyName"></span></p>
                    <p>Prénom : <span id="modalFirstName"></span></p>
                    <p>Email : <span id="modalEmail"></span></p>
                    <p>Numéro de téléphone : <span id="modalPhoneNumber"></span></p>
                    <!-- Ajoutez d'autres informations si nécessaire -->
                </div>
            </div>
        </div>
    </section>
@endsection
