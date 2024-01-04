<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();

        return view('gallery', compact('images'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);

            // Enregistrement des informations dans la base de données
            $imageModel = new Image();
            $imageModel->name = $imageName; // Vous pouvez utiliser le nom original ici si vous le souhaitez
            $imageModel->path = 'storage/images/' . $imageName; // Chemin où l'image est stockée
            $imageModel->save();

            return redirect('/dashboard/image')->with('success', 'image importé avec succès');
        }

        return back()->withErrors(['message' => 'Image non importé']);
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);

        // Supprimer l'image du stockage
        Storage::delete('public/images/' . $image->name);

        // Supprimer l'enregistrement de la base de données
        $image->delete();

        return redirect('/dashboard/image')->with('success', 'image supprimé avec succès');
    }
}

