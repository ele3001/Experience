<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\ExperienceController;
use App\Models\Formulaire;


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


require __DIR__.'/auth.php';

