@extends('professeurs._header')
@section('title', 'Ajouter un professeur')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Ajouter un professeur</h1>
        <form action="{{ route('professeurs.store') }}" method="POST">
            @csrf
            @include('professeurs._formprofesseur')
        </form>
    </div>
@endsection