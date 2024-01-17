<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réservation - Yolan Mack</title>
    <link rel="icon" type="image" href="{{ URL('images/logo.png') }}">


    <!-- SEO website -->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Réservation - Yolan Mack">
    <meta property="og:description" content="Vous cherchez un dj pour un évènement, un mariage, une fête privée
     autour de Compiègne ou dans les Hauts-de-France ?">
    <meta property="og:url" content="https://yolanmack.com/Reservation">
    <meta property="og:site_name" content="Yolan Mack">

    @vite('resources/css/app.css')
</head>
<body>
@include('Layouts.Header')
<div class="bg-black w-full h-full flex justify-center items-center">
    <div class="w-full h-full flex justify-center items-center md:py-20">
        <div class="w-full md:w-[700px] lg:w-[800px] h-full bg-white p-4">
            @if(session('success'))
                <div id="myModal1" class="fixed inset-0 flex items-center justify-center z-50">
                    <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>
                    <div class="modal-container bg-white w-[300px]  mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <!-- Contenu de la fenêtre modale -->
                        <div class=" modal-content py-4 text-left px-6">
                            <div class="w-full flex justify-center items-center py-2">
                                <h1 class="text-2xl font-bold">Réservation envoyée !</h1>
                            </div>
                            <div class="w-full flex justify-center items-center py-2">
                                <p>Votre reservation a bien été envoyée et sera traité dans les plus brefs delais.</p>
                            </div>
                            <div class="w-full flex justify-center items-center py-2">
                                <a href="{{ route('Accueil') }}"  id="closeModal" class="border border-black py-1 px-2 text-center bottom-0 hover:bg-black hover:text-white">Revenir à l'accueil</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <h2 class="text-3xl pt-16  md:py-6 text-black pl-10">Formulaire de réservation</h2>
                <div class="w-full h-full py-10 px-6">
                    <form method="POST" action="/event/store">
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
</div>
</div>
</div>
<script>
    // Sélectionnez l'élément input date.
    const inputDate = document.querySelector('#eventDate');

    // Fonction pour bloquer les jours de la semaine du lundi au vendredi.
    inputDate.addEventListener('input', function () {
        const selectedDate = new Date(inputDate.value);
        const dayOfWeek = selectedDate.getDay(); // 0 pour dimanche, 1 pour lundi, 2 pour mardi, etc.

        // Bloquez la sélection si le jour de la semaine est du lundi au vendredi (1 à 5).
        if (dayOfWeek >= 1 && dayOfWeek <= 5) {
            alert("Nous ne prenons malheureusement pas de réservation en semaine.");
            inputDate.value = ''; // Efface la date sélectionnée.
        }
    });
</script>
</body>
</html>
