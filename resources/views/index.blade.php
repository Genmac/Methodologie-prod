<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    @vite('resources/css/index.css')
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('professeurs.index') }}">Professeurs</a>
        <a href="{{ route('students.index') }}">Étudiants</a>
        <a href="{{ route('etudiant') }}">Connexion</a>
    </nav>
    <main class="text-center">
        <h1>Bienvenue sur notre site</h1>
        <p>Découvrez nos professeurs et étudiants.</p>
        <div class="contenu">
            <div class="card-container g-col-6">
                <div class="card-etudiants">
                    <div class="contenu card">
                        <img src="{{ asset('images/etudiants.jpg') }}" alt="Étudiants">
                        <div class="etudiants">
                            <h3>Étudiants</h3>
                            <p>lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="card-etudiants">
                    <div class="contenu card">
                        <img src="{{ asset('images/etudiants.jpg') }}" alt="Étudiants">
                        <div class="etudiants">
                            <h3>Étudiants</h3>
                            <p>lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="card-etudiants">
                    <div class="contenu card">
                        <img src="{{ asset('images/etudiants.jpg') }}" alt="Étudiants">
                        <div class="etudiants">
                            <h3>Étudiants</h3>
                            <p>lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="card-etudiants">
                    <div class="contenu card">
                        <img src="{{ asset('images/etudiants.jpg') }}" alt="Étudiants">
                        <div class="etudiants">
                            <h3>Étudiants</h3>
                            <p>lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="g-col-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div> -->
        </div>
    </main>
</body>
</html>