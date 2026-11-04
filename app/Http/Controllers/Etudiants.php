<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Etudiants extends Controller
{
    public $listeEtudiants=null;

    function etudiant()
    {
        return view('etudiant');
    }

    function afficherEtudiant(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');

        return view('hello', compact($this->listeEtudiants));
    }

    function createEtudiant(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');

        
        $this->listeEtudiants[] = compact('nom', 'prenom', 'email');
        return view('etudiant', compact('nom', 'prenom'));
    }

    function updateEtudiant(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');

        return view('hello', compact('nom', 'prenom', 'email'));
    }

    function deleteEtudiant(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');

        return view('hello', compact('nom', 'prenom', 'email'));
    }
}