<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/formulaire', [FormulaireController::class, 'submit'])->name('submit.formulaire');

Route::get('/formulaire', function () {
    return view('formulaire');
});

require __DIR__.'/auth.php';
