<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Affiche la vue d'inscription.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Traite la requête d'inscription.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validation des champs de la requête d'inscription
        $request->validate([
            'name' => ['required', 'string', 'max:255'], // Champ 'name' requis, type chaîne, max 255 caractères
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class], // 'email' unique et valide
            'password' => ['required', 'confirmed', Rules\Password::defaults()], // Mot de passe requis, confirmé et conforme aux règles
            'cv' => ['required', 'file', 'mimes:pdf,doc,docx,png,jpg,jpeg', 'max:2048'], // CV requis, type fichier, formats autorisés
            'recommendation_letter' => ['required', 'file', 'mimes:pdf,doc,docx,png,jpg,jpeg', 'max:2048'], // Lettre de recommandation requise
            'cover_letter' => ['required', 'file', 'mimes:pdf,doc,docx,png,jpg,jpeg', 'max:2048'], // Lettre de motivation requise
            'diplomas' => ['required', 'array'], // Diplômes requis, sous forme de tableau
            'diplomas.*' => ['file', 'mimes:pdf,doc,docx,png,jpg,jpeg', 'max:2048'], // Chaque diplôme doit être un fichier valide
            'certifications' => ['required', 'array'], // Certifications requises, sous forme de tableau
            'certifications.*' => ['file', 'mimes:pdf,doc,docx,png,jpg,jpeg', 'max:2048'], // Chaque certification doit être un fichier valide
        ]);

        // Création d'un nouvel utilisateur avec les données validées
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash du mot de passe pour la sécurité
            'cv' => '',
            'recommendation_letter' => '',
            'cover_letter' => '',
            'diplomas' => json_encode([]),
            'certifications' => json_encode([]),
        ]);

        // Fonction pour générer un nom de fichier unique
        function generateFileName($user, $field, $file)
        {
            return $user->name . '_' . $field . '_' . time() . '.' . $file->getClientOriginalExtension();
        }

        // Traitement et stockage du fichier CV
        if ($request->hasFile('cv')) {
            $fileName = generateFileName($user, 'cv', $request->file('cv'));
            $user->cv = $request->file('cv')->storeAs('cv', $fileName, 'public');
        }

        // Traitement de la lettre de recommandation
        if ($request->hasFile('recommendation_letter')) {
            $fileName = generateFileName($user, 'recommendation_letter', $request->file('recommendation_letter'));
            $user->recommendation_letter = $request->file('recommendation_letter')->storeAs('recommendation_letters', $fileName, 'public');
        }

        // Traitement de la lettre de motivation
        if ($request->hasFile('cover_letter')) {
            $fileName = generateFileName($user, 'cover_letter', $request->file('cover_letter'));
            $user->cover_letter = $request->file('cover_letter')->storeAs('cover_letters', $fileName, 'public');
        }

        // Traitement des fichiers de diplômes
        if ($request->hasFile('diplomas')) {
            $user->diplomas = collect($request->file('diplomas'))->map(function ($file) use ($user) {
                $fileName = generateFileName($user, 'diplomas', $file);
                return $file->storeAs('diplomas', $fileName, 'public');
            })->toArray();
        }

        // Traitement des fichiers de certifications
        if ($request->hasFile('certifications')) {
            $user->certifications = collect($request->file('certifications'))->map(function ($file) use ($user) {
                $fileName = generateFileName($user, 'certifications', $file);
                return $file->storeAs('certifications', $fileName, 'public');
            })->toArray();
        }

        // Sauvegarde de l'utilisateur mis à jour avec les chemins des fichiers
        $user->save();

        // Déclenchement de l'événement d'inscription et connexion de l'utilisateur
        event(new Registered($user));
        Auth::login($user);

        // Redirection vers la page d'accueil
        return redirect(RouteServiceProvider::HOME);
    }
}
