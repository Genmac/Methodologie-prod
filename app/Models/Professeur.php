<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    //
    protected $fillable = ['nom', 'prenom', 'email', 'discipline'];
    function getFullNameAttribute(){
        return $this->prenom . ' ' . $this->nom;
    }
}
