<?php

namespace App\Http\Controllers;

use ZipArchive;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Affiche la liste des utilisateurs avec pagination
    public function index(): View
    {
        // Récupérer les utilisateurs, triés par date de création décroissante, avec pagination de 5 par page
        $users = User::orderBy('created_at', 'desc')->paginate(5);
        return view('users/index', ['users' => $users]);
    }

    // Affiche les détails d'un utilisateur spécifique
    public function show($id): View
    {
        // Trouver l'utilisateur par son ID, retourne une erreur 404 s'il n'existe pas
        $user = User::findOrFail($id);
        return view('users/show',['user' => $user]);
    }

    // Affiche le formulaire de création d'utilisateur
    public function create(): View
    {
        return view('users/create');
    }

    // Affiche le formulaire d'édition d'un utilisateur spécifique
    public function edit($id): View
    {
        // Trouver l'utilisateur par son ID, retourne une erreur 404 s'il n'existe pas
        $user = User::findOrFail($id);
        return view('users/edit', ['user' => $user]);
    }

    // Enregistre un nouvel utilisateur après validation des données
    public function store(UserFormRequest $req): RedirectResponse
    {
        // Valider les données via le formulaire de requête personnalisé
        $data = $req->validated();

        // Créer un nouvel utilisateur avec les données validées
        $user = User::create($data);

        // Rediriger vers la page de l'utilisateur nouvellement créé
        return redirect()->route('admin.user.show', ['id' => $user->id]);
    }

    // Met à jour un utilisateur existant avec les données validées
    public function update(User $user, UserFormRequest $req)
    {
        // Valider les données via le formulaire de requête personnalisé
        $data = $req->validated();

        // Mettre à jour l'utilisateur avec les données validées
        $user->update($data);

        // Rediriger vers la page de l'utilisateur mis à jour
        return redirect()->route('admin.user.show', ['id' => $user->id]);
    }

    // Mise à jour rapide d'un utilisateur avec plusieurs attributs
    public function updateSpeed(User $user, Request $req)
    {
        // Mettre à jour chaque champ de l'utilisateur avec les données envoyées
        foreach ($req->all() as $key => $value) {
            $user->update([
                $key => $value
            ]);
        }

        // Retourner une réponse JSON indiquant le succès de l'opération
        return [
            'isSuccess' => true,
            'data' => $req->all()
        ];
    }

    // Supprime un utilisateur
    public function delete(User $user)
    {
        // Supprime l'utilisateur
        $user->delete();

        // Retourner une réponse JSON indiquant le succès de l'opération
        return [
            'isSuccess' => true
        ];
    }

    // Télécharge les fichiers de l'utilisateur sous forme de fichier ZIP
    public function downloadFiles($user)
    {
        // Trouver l'utilisateur par son ID
        $user = User::find($user);

        // Vérifier si l'utilisateur existe
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Créer un nom pour le fichier ZIP
        $zipFileName = 'documents_' . $user->name . '.zip';
        $zipPath = storage_path('app/public/' . $zipFileName);

        // Créer une instance de ZipArchive pour générer le fichier ZIP
        $zip = new ZipArchive;

        // Extensions de fichiers acceptées pour le téléchargement
        $allowedExtensions = ['pdf', 'doc', 'docx', 'png', 'jpg', 'jpeg'];

        // Ouvrir le fichier ZIP pour ajout, en mode création
        if ($zip->open($zipPath, ZipArchive::CREATE) === TRUE) {

            // Fonction pour ajouter un fichier si son extension est valide et si le fichier existe
            $addFileIfValid = function($filePath, $fileName) use ($zip, $allowedExtensions) {
                $extension = pathinfo($filePath, PATHINFO_EXTENSION);
                // Ajouter le fichier si son extension est autorisée et s'il existe
                if (in_array(strtolower($extension), $allowedExtensions) && file_exists($filePath)) {
                    $zip->addFile($filePath, $fileName);
                }
            };

            // Ajouter le CV si disponible et valide
            if ($user->cv) {
                $addFileIfValid(storage_path('app/public/' . $user->cv), $user->name . '_cv.' . pathinfo($user->cv, PATHINFO_EXTENSION));
            }

            // Ajouter la lettre de recommandation si disponible et valide
            if ($user->recommendation_letter) {
                $addFileIfValid(storage_path('app/public/' . $user->recommendation_letter), $user->name . '_recommendation_letter.' . pathinfo($user->recommendation_letter, PATHINFO_EXTENSION));
            }

            // Ajouter la lettre de motivation si disponible et valide
            if ($user->cover_letter) {
                $addFileIfValid(storage_path('app/public/' . $user->cover_letter), $user->name . '_cover_letter.' . pathinfo($user->cover_letter, PATHINFO_EXTENSION));
            }

            // Ajouter les diplômes si disponibles et valides
            if ($user->diplomas) {
                foreach (json_decode($user->diplomas) as $diploma) {
                    $addFileIfValid(storage_path('app/public/' . $diploma), $user->name . '_diploma.' . pathinfo($diploma, PATHINFO_EXTENSION));
                }
            }

            // Ajouter les certifications si disponibles et valides
            if ($user->certifications) {
                foreach (json_decode($user->certifications) as $certification) {
                    $addFileIfValid(storage_path('app/public/' . $certification), $user->name . '_certification.' . pathinfo($certification, PATHINFO_EXTENSION));
                }
            }

            // Fermer le fichier ZIP après ajout des fichiers
            $zip->close();
        } else {
            return response()->json(['error' => 'Unable to create ZIP file'], 500);
        }

        // Retourner le fichier ZIP pour téléchargement et le supprimer après envoi
        return response()->download($zipPath)->deleteFileAfterSend(true);
    }
}
