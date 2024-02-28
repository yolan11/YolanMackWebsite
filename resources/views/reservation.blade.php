<!DOCTYPE html>
<html lang="fr">
<head>


    <!-- SEO website -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réservation - Yolan Mack</title>
    <meta name="description" content="Vous cherchez un dj pour un évènement, un mariage, une fête privée
     autour de Compiègne ou dans les Hauts-de-France ?">
    <link rel="canonical" href="https://yolanmack.com/Reservation/">

    <link rel="icon" type="image/x-icon" href="{{ URL('images/logo.png') }}" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="{{ URL('images/logo.png') }}" sizes="192x192">


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
<body>
@include('Layouts.Header')
<div class="bg-black w-full h-full flex justify-center items-center">
    <div class="w-full h-full flex justify-center items-center md:py-20">
        <div class="w-full md:w-[800px] lg:w-[800px] h-full bg-white p-4">
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
                                <p>Votre réservation a bien été envoyée et sera traitée dans les plus brefs délais.</p>
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
                <form name="reservation" method="POST" action="/event/store">
                    @CSRF
                    <h1 class="test-black py-4 text-2xl">Informations client</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2">
                        <div class="col-span-1 flex flex-col">
                            <label for="familyName">Nom</label>
                            <input name="familyName" id="familyName" type="text"
                                   class="w-full border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                        <div class="col-span-1 flex flex-col">
                            <label for="firstName">Prénom</label>
                            <input name="firstName" id="firstName" type="text"
                                   class="w-full border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2">
                        <div class="flex flex-col col-span-1">
                            <label for="phoneNumber">Numéro de téléphone</label>
                            <input name="phoneNumber" id="phoneNumber" type="text"
                                   class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                        <div class="flex flex-col col-span-1">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email"
                                   class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                    </div>

                    <h1 class="test-black py-4 text-2xl">Adresse client</h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2">
                        <div class="flex flex-col col-span-1">
                            <label for="streetNumber">Numéro de voie</label>
                            <input name="streetNumber" id="streetNumber" type="text"
                                   class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                        <div class="flex flex-col col-span-1">
                            <label for="streetName">Rue</label>
                            <input name="streetName" id="streetName" type="text"
                                   class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                        <div class="flex flex-col col-span-1">
                            <label for="city">Ville</label>
                            <input name="city" id="city" type="text"
                                   class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                        <div class="flex flex-col col-span-1">
                            <label for="country">Pays</label>
                            <input name="country" id="country" type="text"
                                   class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                    </div>

                    <h1 class="test-black py-4 text-2xl">Informations évènement</h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2">
                        <div class="flex flex-col col-span-1">
                            <label for="eventDate">Date de l'évènement</label>
                            <input name="eventDate" id="eventDate" type="date"
                                   class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                        <div class="flex flex-col col-span-1">
                            <label for="eventLocation">Lieu et adresse de l'évènement</label>
                            <input name="eventLocation" id="eventLocation" type="text"
                                   class="border border-gray-400 py-1 px-2 bg-gray-100 focus:bg-white" required>
                        </div>
                        <div class="flex flex-col col-span-1">
                            <label for="eventType">Type d'évènement</label>
                            <select name="eventType" id="eventType"
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
                        <label for="information">Autres informations</label>
                        <textarea name="information" id="information" class="border border-gray-400 resize-none h-[100px] py-1 px-2 w-full bg-gray-100 focus:bg-white" required></textarea>
                    </div>

                    <div class="mt-5 flex justify-center items-center">
                        <label for="checkbox" class="mx-4">J'accepte que mes informations soient stockées afin de traiter ma reservation</label>
                        <input id="checkbox" name="checkbox" type="checkbox" class="border border-gray-400" required>
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


</body>
</html>
