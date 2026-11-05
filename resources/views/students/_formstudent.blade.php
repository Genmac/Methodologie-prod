<input type = "text" name = "nom" placeholder="Nom" class = "form-control" value = "{{ old('nom', $student->nom ?? '') }}" required>
<input type = "text" name = "prenom" placeholder="Prénom" class = "form-control" value = "{{ old('prenom', $student->prenom ?? '') }}" required>
<input type = "email" name = "email" placeholder="Email" class = "form-control" value = "{{ old('email', $student->email ?? '') }}" required>
<input type = "date" name = "date_naissance" placeholder="Date de naissance" class = "form-control" value = "{{ old('date_naissance', $student->date_naissance ?? '') }}" required>
<button type = "submit" class = "btn btn-primary">Valider</button>
<button type = "reset" class = "btn btn-secondary">Annuler</button>