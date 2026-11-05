<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hello;
use App\Http\Controllers\Etudiants;
use App\Http\Controllers\Index;
use App\Http\Controllers\StudentController;
Route::get('/', [Index::class, 'home'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::post('/createEtudiant', [Etudiants::class, 'createEtudiant'])->name('createEtudiant');
Route::post('/updateEtudiant', [Etudiants::class, 'updateEtudiant'])->name('updateEtudiant');
Route::post('/deleteEtudiant', [Etudiants::class, 'deleteEtudiant'])->name('deleteEtudiant');
Route::get('/afficherEtudiant', [Etudiants::class, 'afficherEtudiant'])->name('afficherEtudiant');
Route::get('/etudiant', [Etudiants::class, 'etudiant'])->name('etudiant');
Route::get('/editEtudiant', [Etudiants::class, 'editEtudiant'])->name('editEtudiant');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::resource('students', StudentController::class);

require __DIR__.'/settings.php';
