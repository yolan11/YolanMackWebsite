<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('Auth.login');
    }

    public function store(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'utilisateur est authentifié
            return redirect()->intended('/dashboard'); // Redirigez l'utilisateur vers la page de tableau de bord ou une autre page sécurisée
        }

        // L'authentification a échoué
        return back()->withErrors(['email' => 'Email ou mot de passe incorrect.']);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Déconnexion de l'utilisateur
        $request->session()->invalidate(); // Invalidation de la session

        return redirect('/'); // Rediriger vers la page de connexion ou une autre page de votre choix
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/dashboard/user')->with('errorDeleteBrand', 'Marque non trouvée');
        }

        $deletedUser = $user->name;

        $user->delete();

        return redirect('/dashboard/user')->with('successDeleteBrand', "L'utilisateur $deletedUser a été supprimée avec succès");
    }

    public function update(Request $request, $id)
    {
        // Récupérer l'utilisateur à mettre à jour
        $user = User::find($id);

        // Vérifier si l'utilisateur existe
        if (!$user) {
            return back()->withErrors(['message' => 'Utilisateur non trouvé']);
        }

        // Mettre à jour les champs nécessaires
        $user->name = $request->input('editName');
        $user->email = $request->input('editEmail');

        // Vérifier si un nouveau mot de passe est fourni
        if ($request->has('editPassword') && $request->input('editPassword')) {
            // Hasher le nouveau mot de passe
            $user->password = bcrypt($request->input('editPassword'));
        }

        // Enregistrer les modifications
        $user->save();

        return redirect('/dashboard/user')->with('success', 'Profil mis à jour avec succès');
    }

}
