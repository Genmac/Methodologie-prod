<!Doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Gestion des Professeurs ')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
   <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('professeurs.index') }}">Gestion des Professeurs </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('professeurs.index') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('professeurs.create') }}">Ajouter professeur</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <main>
        @yield('content')
    </main>
</body>
</html>