<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hello;
use App\Http\Controllers\Etudiants;
use App\Http\Controllers\Index;

Route::get('/', [Index::class, 'home'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::post('/createEtudiant', [Etudiants::class, 'createEtudiant'])->name('createEtudiant');
Route::post('/updateEtudiant', [Etudiants::class, 'updateEtudiant'])->name('updateEtudiant');
Route::post('/deleteEtudiant', [Etudiants::class, 'deleteEtudiant'])->name('deleteEtudiant');
Route::get('/afficherEtudiant', [Etudiants::class, 'afficherEtudiant'])->name('afficherEtudiant');
Route::get('/etudiant', [Etudiants::class, 'etudiant'])->name('etudiant');

require __DIR__.'/settings.php';
