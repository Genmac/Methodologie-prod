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
        <a href="{{ route('hello') }}">Hello</a>
        <a href="{{ route('etudiant') }}">Étudiants</a>
    </nav>
</body>
</html>