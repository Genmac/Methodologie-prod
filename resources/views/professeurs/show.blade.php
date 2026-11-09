@extends('professeurs._header')
@section('title', 'Détails du professeur')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Détails du professeur</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Nom:</strong> {{ $professeur->nom }}</p>
                <p><strong>Prénom:</strong> {{ $professeur->prenom }}</p>
                <p><strong>Email:</strong> {{ $professeur->email }}</p>
                <p><strong>Discipline:</strong> {{ $professeur->discipline }}</p>
            </div>
        </div>
    </div>
@endsection