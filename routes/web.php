<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\ExperienceController;
use App\Models\Formulaire;

Route::post('/formulaire', function (Request $request) {
    // Validation des données
    $validatedData = $request->validate([
        'nom_site_pratique' => 'required',
        'titre' => 'required',
        'prenom' => 'required', // Ajoutez les règles de validation pour les autres champs
        'nom' => 'required',
        'activite' => 'required',
        'lieu' => 'required',
        'date' => 'required',
        'distance_sous_terre' => 'required',
        'priorite' => 'required',
        'description_probleme' => 'required',
        'etat' => 'required',
        
    ]);

    // Création d'une nouvelle instance du modèle Information
    $information = new Information();
    $information->nom_site_pratique = $validatedData['nom_site_pratique'];
    $information->titre = $validatedData['titre'];
    $information->prenom = $validatedData['prenom']; // Ajoutez les champs manquants ici
    $information->nom = $validatedData['nom'];
    $information->activite = $validatedData['activite'];
    $information->lieu = $validatedData['lieu'];
    $information->date = $validatedData['date'];
    $information->distance_sous_terre = $validatedData['distance_sous_terre'];
    $information->priorite = $validatedData['priorite'];
    $information->description_probleme = $validatedData['description_probleme'];
    $information->etat = $validatedData['etat'];


    // Enregistrement des données dans la base de données
    $information->save();

    // Redirection avec un message de succès
    return redirect('/formulaire')->with('success', 'Les informations ont été enregistrées avec succès.');
})->name('submit.formulaire');


Route::get('/experience', function () {
    return view('experience');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/formulaire', [FormulaireController::class, 'submit'])->name('submit.formulaire');

Route::get('/formulaire', function () {
    return view('formulaire');
});

Route::get('/experience/{experience}', [ExperienceController::class, 'show'])->name('experience.show');
// Route::get('/experience', [ExperienceController::class, 'methodName'])->name('experience');
Route::get('/', [ExperienceController::class, 'index']);

Route::get('/show/{formulaire}', [FormulaireController::class, 'show'])->name('formulaire.show');
Route::get('/show', function () {
    return view('show');
});


Route::middleware(['auth', 'moderator'])->group(function () {
    Route::get('/espace-moderaeur', [FormulaireController::class, 'index'])->name('moderation.index');
});

Route::middleware(['auth', 'moderator'])->get('/espace-moderateur', [FormulaireController::class, 'espaceModerateur'])->name('espace-moderateur');

Route::middleware(['auth', 'moderator'])->get('/formulaire/{formulaire}/edit', [FormulaireController::class, 'edit'])->name('formulaire.edit');
Route::put('/formulaire/{formulaire}', [FormulaireController::class, 'update'])->name('formulaire.update');

Route::post('/formulaire/{formulaire}/publish', [FormulaireController::class, 'publish'])->name('formulaire.publish');


Route::post('/formulaire/{formulaire}/unpublish', [FormulaireController::class, 'unpublish'])->name('formulaire.unpublish');
Route::get('/', [ExperienceController::class, 'index'])->name('home');

require __DIR__.'/auth.php';

