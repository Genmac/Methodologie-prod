<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire étudiant</title>
    @vite('resources/css/etudiant.css')
</head>
<body>
    <main class="card">
        <h1>Inscription</h1>

        <form action="{{ route('createEtudiant') }}" method="POST">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Envoyer</button>
        </form>
    </main>
    
    <script>
        button.addEventListener('click', function() {
            if(document.getElementById('nom') !== null){
                alert("L'etudiant a été ajouté avec succès !");
        }
        });
    </script>
</body>
</html>