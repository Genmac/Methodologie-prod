@extends('professeurs._header')
@section('title','Liste de professeurs')
@section('content')
    <div class="container mt-5">
        @if($professeurs->isEmpty())
            <div class="alert alert-info" role="alert">
                Aucun professeur trouvé. <a href="{{ route('professeurs.create') }}" class="alert-link">Ajouter un nouveau professeur</a>.
            </div>
        @else
            <h1 class="mb-4">Liste de professeurs</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Discipline</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professeurs as $professeur)
                        <tr>
                            <td>{{ $professeur->nom }}</td>
                            <td>{{ $professeur->prenom }}</td>
                            <td>{{ $professeur->email }}</td>
                            <td>{{ $professeur->discipline }}</td>
                            <td>
                                <a href="{{ route('professeurs.show', $professeur) }}" class="btn btn-info btn-sm">Voir</a>
                                <a href="{{ route('professeurs.edit', $professeur) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('professeurs.destroy', $professeur) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection