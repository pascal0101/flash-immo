<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    //Adresse
    public function adresse()
    {
        return $this->hasOne('App\Adresse');
    }
    public function adresses()
    {
        return $this->belongsTo('App\Adresse');
    }

    //Type offre
    public function TypeOffre()
    {
        return $this->hasOne('App\TypeOffre');
    }
    public function TypeOffres()
    {
        return $this->belongsTo('App\TypeOffre');
    }

    //Type bien
    public function TypeBien()
    {
        return $this->hasOne('App\TypeBien');
    }
    public function TypeBiens()
    {
        return $this->belongsTo('App\TypeBien');
    }

    //Agence Immobiliere
    public function AgenceImmobiliere()
    {
        return $this->hasOne('App\AgenceImmobiliere');
    }
    public function AgenceImmobilieres()
    {
        return $this->belongsTo('App\AgenceImmobiliere');
    }

    //utilisateur
    public function Utilisateur()
    {
        return $this->hasOne('App\Utilisateur');
    }
    public function Utilisateurs()
    {
        return $this->belongsToMany('App\Utilisateur');
    }
}
