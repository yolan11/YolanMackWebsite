@extends('Admin.dashboard')

@section('content')
    <section id="content" class="flex flex-col z-10 ml-[280px] h-screen px-6 pb-6 pt-[82px] bg-gray-300">
        <div class="relative w-full h-full flex flex-col ">
            <div id="pictureCreateModal" class="absolute bg-black w-full h-full bg-opacity-50 flex justify-center items-center">
                <div class="bg-white w-[500px] flex justify-center items-center">
                    <div class=" w-full h-full flex flex-col justify-center items-center">
                        <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data" class="w-full h-full flex flex-col justify-center align-center">
                            @csrf
                            <input type="file" name="image" class="m-4"/>
                            <input type="submit" value="Importer une image" class=" bg-black py-2 text-white m-4"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
