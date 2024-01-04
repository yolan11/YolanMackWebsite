@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col ">
            <div id="eventCreateModal" class="absolute bg-white w-full h-full flex overflow-y-auto">
                <div class="w-full h-auto flex">
                    <div class=" w-full h-auto flex flex-col">
                        <form method="POST" action="/dashboard/event/store" class="w-full flex flex-col">
                            @csrf
                            <h1 class="test-black py-4 text-2xl">Informations client</h1>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2">
                                <div class="col-span-1 flex flex-col">
                                    <label for="" class="">Nom</label>
                                    <input name="familyName" id="familyName" type="text"
                                           class="w-full border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                                <div class="col-span-1 flex flex-col">
                                    <label for="" class="">Prénom</label>
                                    <input name="firstName" id="firstName" type="text"
                                           class="w-full border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2">
                                <div class="flex flex-col col-span-1">
                                    <label class="" for="">Numéro de téléphone</label>
                                    <input name="phoneNumber" id="phoneNumber" type="text"
                                           class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                                <div class="flex flex-col col-span-1">
                                    <label class="" for="">Email</label>
                                    <input name="email" id="email" type="email"
                                           class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                            </div>

                            <h1 class="test-black py-4 text-2xl">Adresse client</h1>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2">
                                <div class="flex flex-col col-span-1">
                                    <label for="">Numéro de voie</label>
                                    <input name="streetNumber" id="streetNumber" type="text"
                                           class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                                <div class="flex flex-col col-span-1">
                                    <label for="">Rue</label>
                                    <input name="streetName" id="streetName" type="text"
                                           class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                                <div class="flex flex-col col-span-1">
                                    <label for="">Ville</label>
                                    <input name="city" id="city" type="text"
                                           class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                                <div class="flex flex-col col-span-1">
                                    <label for="">Pays</label>
                                    <input name="country" id="country" type="text"
                                           class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                            </div>

                            <h1 class="test-black py-4 text-2xl">Informations évènement</h1>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2">
                                <div class="flex flex-col col-span-1">
                                    <label for="">Date de l'évènement</label>
                                    <input name="eventDate" id="eventDate" type="date"
                                           class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white"
                                           id="date-input" required>
                                </div>
                                <div class="flex flex-col col-span-1">
                                    <label for="">Lieu et adresse de l'évènement</label>
                                    <input name="eventLocation" id="eventLocation" type="text"
                                           class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                </div>
                                <div class="flex flex-col col-span-1">
                                    <label for="">Type d'évènement</label>
                                    <select placeholder="hello" name="eventType" id="eventType"
                                            class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                                        <option value="typeDevenement">Type d'évènement</option>
                                        <option value="mariage">Mariage</option>
                                        <option value="anniversaire">Anniversaire</option>
                                        <option value="coktailEntreprise">Coktail entreprise</option>
                                        <option value="buffet">Buffet</option>
                                        <option value="arbreDeNoel">Arbre de noel</option>
                                        <option value="fete">Fete</option>
                                        <option value="anniversaireDentreprise">Anniversaire d'entreprise</option>
                                        <option value="anniversaireDeMariage">Anniversaire de mariage</option>
                                        <option value="conference">Conférence</option>
                                        <option value="evenementPublic">Evenement public</option>
                                        <option value="evenementPrivee">Evenement privée</option>
                                    </select>
                                </div>
                            </div>

                            <h1 class="test-black py-4 text-2xl ">Autres informations</h1>
                            <div class="flex flex-col">
                                <label for="">Autres informations</label>
                                <input type="text" name="information" id="information"
                                       class="border border-gray-400 py-1 px-2 w-full bg-gray-100 focus:bg-white" required>
                            </div>

                            <div class="mt-5 flex justify-center items-center">
                                <input type="checkbox" class="border border-gray-400" required>
                                <span class="mx-4">J'accepte que mes information soient stocké afin de traiter ma reservation</span>
                            </div>
                            <div class="mt-5">
                                <button class="w-full bg-white py-3 text-center text-black my-4 hover:bg-black border border-black hover:text-white" type="submit">Envoyer la demande reservation
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
