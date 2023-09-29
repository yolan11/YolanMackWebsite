<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réservation - Yolan Mack</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('components.Header')
@if(session('success'))
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4">
        <p class="font-bold">Be Warned</p>
        <p>{{ session('success') }}</p>
    </div>
@endif
<div name="reservation" class="w-full">
    <div class="w-full h-full">
        <div class="flex bg-white overflow-hidden">
            <div class=" w-1/2 flex flex-col items-center p-12 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1532618790904-3c45e0405300?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">

            </div>
            <div class="w-1/2 py-16 px-12">
                @if(session('success'))
                    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4">
                        <p class="font-bold">Be Warned</p>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                <h2 class="text-2xl mb(4">Réservation</h2>
                <p class="mb-4">
                    Create your reservatio so that i can tech you
                </p>

                <form method="POST" action="/events/store">
                    @csrf
                    <div class="grid grid-cols-2 gap-5">
                        <input name="familyName" id="familyName" type="text" placeholder="Nom" class="border border-gray-400 py-1 px-2" required>
                        <input name="firstName" id="firstName" type="text" placeholder="Prénom" class="border border-gray-400 py-1 px-2" required>
                    </div>
                    <div class="mt-5 grid grid-cols-2 gap-5">
                        <input name="email" id="email" type="email" placeholder="Email" class="border border-gray-400 py-1 px-2" required>
                        <input name="phoneNumber" id="phoneNumber" type="text" placeholder="Téléphone" class="border border-gray-400 py-1 px-2" required>
                    </div>
                    <div class="mt-5">
                        <label for="">Date de l'évènement</label>
                        <input name="eventDate" id="eventDate" type="date" class="w-full" id="date-input" required>
                    </div>
                    <div class="mt-5">
                        <input name="eventLocation" id="eventLocation" type="text" placeholder="Lieu de l'évènement" class="w-full" required>
                    </div>
                    <div class="mt-5">
                        <select placeholder="hello" name="eventType" id="eventType" class="w-full" required>
                            <option value="type">Type d'évènement</option>
                            <option value="mariage">Mariage</option>
                            <option value="anniversaire">Anniversaire</option>
                            <option value="evènementSportif">Evènement sportif</option>

                        </select>
                    </div>
                    <div class="mt-5">
                        <input type="checkbox" class="border border-gray-400" required>
                        <span>j'accepte que mes information soient envoyé afin de traiter ma reservation</span>
                    </div>
                    <div class="mt-5">
                        <button class="w-full bg-[#C1E7FA] py-3 text-center text-white" type="submit">Envoyer la reservation</button>
                    </div>

                </form>
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
