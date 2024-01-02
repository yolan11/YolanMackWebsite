@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col ">
            <!-- Bouton affichage modal création de marque -->
            <div class="w-full flex justify-start items-center">
                <button id="newPictureButton" class="p-4 bg-black text-white flex justify-center items-center">Importer une image</button>
            </div>

            <!--Tableau-->
            <div class="w-full h-full flex">
                <div class="w-full h-full overflow-y-scroll flex flex-col gap-4">
                    <table class="table-auto  border-collapse border border-slate-400">
                        <thead class=" bg-gray-200">
                        <tr class="">
                            <th class="border border-slate-300 p-4">Nom</th>
                            <th class="border border-slate-300 p-4">Stockage</th>
                            <th class="border border-slate-300 p-4">Supprimer</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach ($images as $image)
                            <tr class="py-4">
                                <td class="border border-slate-300 p-4">{{ $image->name }}</td>
                                <td class="border border-slate-300 p-4">{{ $image->path }}</td>
                                <td class="border border-slate-300">
                                    <form action="{{ route('deleteImage', $image->id) }}" method="POST">
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

            <!-- Modal pour importer une image -->
            <div id="pictureCreateModal" class="absolute bg-black w-full h-full bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white w-[500px] flex justify-center items-center">
                    <div class=" w-full h-full flex flex-col justify-center items-center">
                        <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data" class="w-full h-full flex flex-col justify-center align-center">
                            @csrf
                            <input type="file" name="image" class="m-4"/>
                            <input type="submit" value="Upload Image" class="m-4"/>
                        </form>
                        <div class="w-full p-4 flex">
                            <button id="closePictureCreateModal" class="w-full bg-black py-2 text-white">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- Script pour afficher la modal d'import -->
    <script>
        // Récupérer tous les boutons "Modifier"
        var editButtons = document.querySelectorAll('#newPictureButton');

        // Boucler sur chaque bouton "Modifier"
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                console.log('1')
                document.getElementById('pictureCreateModal').style.display = 'flex';
            });
        });

        // Gérer la fermeture de la modal
        document.querySelector('#closePictureCreateModal').addEventListener('click', function() {
            document.getElementById('pictureCreateModal').style.display = 'none';
        });
    </script>
@endsection
