<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('professeurs.index', ['professeurs' => Professeur::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('professeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:professeurs,email',
            'discipline' => 'required|string|max:255',
        ]);
        Professeur::create($data);
        return redirect()->route('professeurs.index')->with('success', 'Professeur created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        //
        return view('professeurs.show', compact('professeur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur)
    {
        //
        return view('professeurs.edit', compact('professeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professeur $professeur)
    {
        //
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:professeurs,email,' . $professeur->id,
            'discipline' => 'required|string|max:255',
        ]);
        $professeur->update($data);
        return redirect()->route('professeurs.index')->with('success', 'Professeur updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur)
    {
        //
        $professeur->delete();
        return redirect()->route('professeurs.index')->with('success', 'Professeur deleted successfully.');
    }
}
