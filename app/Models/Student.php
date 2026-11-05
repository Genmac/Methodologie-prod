<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['nom', 'prenom', 'email', 'date_naissance'];
    function getFullNameAttribute(){
        return $this->prenom . ' ' . $this->nom;
    }
}
