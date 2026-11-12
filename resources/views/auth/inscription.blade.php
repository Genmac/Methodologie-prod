<!Doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    @vite('resources/css/inscription.css')
</head>
<body>
    <main class="text-center">
        <h1>Inscription</h1>
        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            <div>
                <label for="Prenom et Nom">Nom:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </main>
</body>

