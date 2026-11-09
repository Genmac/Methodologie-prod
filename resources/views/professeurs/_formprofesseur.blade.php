<input type = "text" name = "nom" placeholder="Nom" class = "form-control" value = "{{ old('nom', $professeur->nom ?? '') }}" required>
<input type = "text" name = "prenom" placeholder="Prénom" class = "form-control" value = "{{ old('prenom', $professeur->prenom ?? '') }}" required>
<input type = "email" name = "email" placeholder="Email" class = "form-control" value = "{{ old('email', $professeur->email ?? '') }}" required>
<input type = "text" name = "discipline" placeholder="Discipline" class = "form-control" value = "{{ old('discipline', $professeur->discipline ?? '') }}" required>
<button type = "submit" class = "btn btn-primary">Valider</button>
<button type = "reset" class = "btn btn-secondary">Annuler</button>