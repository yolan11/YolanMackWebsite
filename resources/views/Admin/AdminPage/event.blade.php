@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col">

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
                                <td class="border border-slate-300">
                                    <button id="show-btn" class="w-full p-4 h-full bg-green-300" value="{{ $event->id }}">
                                        Voir la reservation
                                    </button>
                                </td>
                                <td class="border border-slate-300">
                                    <button id="edit-btn" class="w-full p-4 h-full bg-blue-300" value="{{ $event->id }}">
                                        Modifier
                                    </button>
                                </td>
                                <td class="border border-slate-300">
                                    <form id="deleteEvent" action="{{ route('deleteEvent', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-full p-4 h-full bg-red-300">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal pour voir un événement -->
            <div id="eventShowModal" class="absolute bg-white w-full h-full flex hidden overflow-y-auto">
                <div class="w-full h-auto flex">
                    <div class=" w-full h-auto flex flex-col">
                        <div class="w-full flex flex-col">

                            <label for="showFamilyName" class="m-4">Nom</label>
                            <p id="showFamilyName" class="m-4 text-2xl" ></p>

                            <label for="showFirstName" class="m-4">Prénom</label>
                            <p id="showFirstName" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showEmail">Email</label>
                            <p id="showEmail" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showPhoneNumber">Numéro de téléphone</label>
                            <p id="showPhoneNumber" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showStreetNumber">Numéro de voie</label>
                            <p id="showStreetNumber" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showStreetName">Rue</label>
                            <p id="showStreetName" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showCity">Ville</label>
                            <p id="showCity" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showCountry">Pays</label>
                            <p id="showCountry" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showEventDate">Date de l'évènement</label>
                            <p id="showEventDate" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showEventLocation">Lieu et adresse du lieu d'évènement</label>
                            <p id="showEventLocation" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showEventType">Type d'évènement</label>
                            <p id="showEventType" class="m-4 text-2xl" ></p>

                            <label class="m-4" for="showInformation">Autres informations</label>
                            <p id="showInformation" class="m-4 text-2xl"></p>
                        </div>
                        <div class="w-full p-4 flex">
                            <button id="closeEventShowModal" class="w-full bg-black py-2 text-white">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal pour modifier une marque -->
            <div id="eventEditModal" class="absolute bg-white w-full h-full flex hidden overflow-y-auto">
                <div class=" w-full h-auto flex ">
                    <div class=" w-full h-auto flex flex-col ">
                        <form id="updateForm" action="{{ route('updateEvent', $event->id) }}" method="POST" class="w-full flex flex-col">
                            @method('PUT')
                            @csrf
                            <label for="editFamilyName" class="m-4">Nom</label>
                            <input name="editFamilyName" id="editFamilyName" type="text" class="m-4" required>

                            <label for="editFirstName" class="m-4">Prénom</label>
                            <input name="editFirstName" id="editFirstName" type="text" class="m-4" required>

                            <label class="m-4" for="editEmail">Email</label>
                            <input name="editEmail" id="editEmail" type="email" class="m-4" required>

                            <label class="m-4" for="editPhoneNumber">Numéro de téléphone</label>
                            <input name="editPhoneNumber" id="editPhoneNumber" type="text" class="m-4" required>

                            <label class="m-4" for="editStreetNumber">Numéro de voie</label>
                            <input name="editStreetNumber" id="editStreetNumber" type="text" class="m-4" required>

                            <label class="m-4" for="editStreetName">Rue</label>
                            <input name="editStreetName" id="editStreetName" type="text" class="m-4" required>

                            <label class="m-4" for="editCity">Ville</label>
                            <input name="editCity" id="editCity" type="text" class="m-4" required>

                            <label class="m-4" for="editCountry">Pays</label>
                            <input name="editCountry" id="editCountry" type="text" class="m-4" required>

                            <label class="m-4" for="editEventDate">Date de l'évènement</label>
                            <input name="editEventDate" id="editEventDate" type="date" class="m-4" required>

                            <label class="m-4" for="editEventLocation">Lieu et adresse du lieu d'évènement</label>
                            <input name="editEventLocation" id="editEventLocation" type="text" class="m-4" required>

                            <select name="editEventType" id="editEventType"
                                    class="m-4" required>
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

                            <label class="m-4" for="editInformation">Autres informations</label>
                            <input name="editInformation" id="editInformation" type="text" class="m-4">

                            <button id="saveChanges" type="submit" class="bg-black m-4 py-2 text-white">Mettre à jour la réservation</button>
                        </form>
                        <div class="w-full p-4 flex">
                            <button id="close" class="w-full bg-black py-2 text-white">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Script pour afficher la modal voir plus -->
    <script>
        const showButtons = document.querySelectorAll('#show-btn');

        showButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const eventId = button.value;

                // Faire une requête AJAX pour récupérer les données de l'événement
                fetch(`/getEventData/${eventId}`)
                    .then(response => response.json())
                    .then(data => {
                        const fieldsMapping = {
                            'showFamilyName': 'familyName',
                            'showFirstName': 'firstName',
                            'showEmail': 'email',
                            'showPhoneNumber': 'phoneNumber',
                            'showStreetNumber': 'streetNumber',
                            'showStreetName': 'streetName',
                            'showCity': 'city',
                            'showCountry': 'country',
                            'showEventDate': 'eventDate',
                            'showEventLocation': 'eventLocation',
                            'showEventType': 'eventType'
                        };

                        for (const fieldId in fieldsMapping) {
                            const paraElement = document.getElementById(fieldId);
                            const dataKey = fieldsMapping[fieldId];
                            const dataValue = data[dataKey];

                            if (paraElement && dataValue) {
                                // Mettre à jour le texte des balises <p>
                                paraElement.textContent = dataValue;
                            }
                        }

                        document.getElementById('eventShowModal').style.display = 'flex';
                    })
                    .catch(error => {
                        console.error('Une erreur est survenue : ', error);
                    });
            });
        });

        document.querySelector('#closeEventShowModal').addEventListener('click', function() {
            document.getElementById('eventShowModal').style.display = 'none';
        });
    </script>


    <!-- Script pour afficher la modal d'update -->
    <script>
        const editButtons = document.querySelectorAll('#edit-btn');

        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const eventId = button.value;

                fetch(`/getEventData/${eventId}`)
                    .then(response => response.json())
                    .then(data => {
                        const fieldsMapping = {
                            'editFamilyName': 'familyName',
                            'editFirstName': 'firstName',
                            'editEmail': 'email',
                            'editPhoneNumber': 'phoneNumber',
                            'editStreetNumber': 'streetNumber',
                            'editStreetName': 'streetName',
                            'editCity': 'city',
                            'editCountry': 'country',
                            'editEventDate': 'eventDate',
                            'editEventLocation': 'eventLocation',
                        };

                        for (const fieldId in fieldsMapping) {
                            const inputField = document.getElementById(fieldId);
                            const dataKey = fieldsMapping[fieldId];

                            if (inputField && data[dataKey]) {
                                inputField.value = data[dataKey];
                            }
                        }

                        const updateForm = document.getElementById('updateForm');
                        updateForm.action = `{{ route('updateEvent', ':id') }}`.replace(':id', eventId);

                        document.getElementById('eventEditModal').style.display = 'flex';
                    })
                    .catch(error => {
                        console.error('Une erreur est survenue : ', error);
                    });
            });
        });

        document.querySelector('#close').addEventListener('click', function() {
            document.getElementById('eventEditModal').style.display = 'none';
        });
    </script>

    <script>
        const deleteForms = document.querySelectorAll('#deleteEvent');

        deleteForms.forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                if (confirm("Êtes-vous sûr de vouloir supprimer cet événement ?")) {
                    form.submit();
                } else {
                    // Annuler la suppression
                    return false;
                }
            });
        });
    </script>

@endsection
