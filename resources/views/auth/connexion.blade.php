<!Doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    @vite('resources/css/Connexion.css')
</head>
<body>
    <main class="text-center">
        <h1>Connexion</h1>
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
            <button><a href="{{ route('register') }}">S'inscrire</a></button>
        </form>
    </main>
</body>