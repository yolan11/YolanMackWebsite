@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col">
            <!-- Bouton affichage modal création de l'utilisateur -->
            <div class="w-full flex justify-start items-center">
                <button id="newUserButton" class="p-4 bg-black text-white flex justify-center items-center">Créer un utilisateur</button>
            </div>

            <!--Tableau-->
            <div class="w-full h-full flex">
                <div class="w-full h-full flex flex-col gap-4">
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
                                <td class="border border-slate-300">
                                    <button id="edit-btn2" class="w-full p-4 h-full bg-blue-300" value="{{ $user->id }}">
                                        Modifier
                                    </button>
                                </td>
                                <td class="border border-slate-300">
                                    <form action="{{ route('userDestroy', $user->id) }}" method="POST">
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

            <!-- Modal pour créer un nouvel utilisateur -->
            <div id="userCreateModal" class="absolute bg-black w-full h-full bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white w-[500px] flex justify-center items-center">
                    <div class=" w-full h-full flex flex-col justify-center items-center">
                        <form action="{{ route('registerStore') }}" method="POST" class="w-full flex flex-col justify-center align-center">
                            @csrf
                            <input name="name" id="name" type="text" placeholder="Nom" class="m-4 " required>
                            <input name="email" id="email" type="email" placeholder="Email" class="m-4" required>
                            <input name="password" id="password" type="password" placeholder="Mot de passe" class="m-4" required>
                            <input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirmation de mot de passe" class="m-4" required>
                            <button type="submit" class="bg-black m-4 py-2 text-white">Créer un nouvel utilisateur</button>
                        </form>
                        <div class="w-full p-4 flex">
                            <button id="closeUserCreateModal" class="w-full bg-black py-2 text-white">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal pour modifier un nouvel utilisateur -->
            <div id="userUpdateModal" class="absolute bg-black w-full h-full bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white w-[500px] flex justify-center items-center">
                    <div class=" w-full h-full flex flex-col justify-center items-center">
                        <form id="updateUserForm" action="{{ route('userUpdate', $user->id) }}" method="POST" class="w-full flex flex-col justify-center align-center">
                            @method('PUT')
                            @csrf
                            <input name="editName" id="editName" type="text" placeholder="Nom" class="m-4 ">
                            <input name="editEmail" id="editEmail" type="email" placeholder="Email" class="m-4">
                            <input name="editPassword" id="editPassword" type="password" placeholder="Mot de passe" class="m-4">
                            <input name="editPassword_confirmation" id="editPassword_confirmation" type="password" placeholder="Confirmation de mot de passe" class="m-4">

                            <button id="saveChanges" type="submit" class="bg-black m-4 py-2 text-white">Mettre à jour l'utilisateur</button>
                        </form>
                        <div class="w-full p-4 flex">
                            <button id="closeUserUpdateModal" class="w-full bg-black py-2 text-white">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script pour afficher la modal de création -->
    <script>
        // Récupérer tous les boutons "Modifier"
        var editButtons = document.querySelectorAll('#newUserButton');

        // Boucler sur chaque bouton "Modifier"
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                console.log('1')
                document.getElementById('userCreateModal').style.display = 'flex';
            });
        });

        // Gérer la fermeture de la modal
        document.querySelector('#closeUserCreateModal').addEventListener('click', function() {
            document.getElementById('userCreateModal').style.display = 'none';
        });
    </script>

    <!-- Script pour afficher la modal d'update -->
    <script>
        // Récupérer tous les boutons "Modifier"
        var editButtons = document.querySelectorAll('#edit-btn2');

        // Boucler sur chaque bouton "Modifier"
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var row = this.parentNode.parentNode; // Récupérer la ligne parente du bouton
                var cells = row.querySelectorAll('td'); // Récupérer toutes les cellules de la ligne

                // Récupérer les données de chaque cellule
                var name = cells[0].innerText.trim();
                var email = cells[1].innerText.trim();

                // Récupérer l'ID de la ligne à modifier depuis la valeur du bouton
                var id = this.value;

                // Pré-remplir les champs de la modal avec les données récupérées
                document.getElementById('editName').value = name;
                document.getElementById('editEmail').value = email;


                // Mettre à jour l'attribut "action" du formulaire de mise à jour avec l'ID de la ligne
                var updateForm = document.getElementById('updateUserForm');
                updateForm.action = "{{ route('User.update', ':id') }}".replace(':id', id);

                // Afficher la modal
                document.getElementById('userUpdateModal').style.display = 'flex';
            });
        });

        // Gérer la fermeture de la modal
        document.querySelector('#closeUserUpdateModal').addEventListener('click', function() {
            document.getElementById('userUpdateModal').style.display = 'none';
        });
    </script>


@endsection
