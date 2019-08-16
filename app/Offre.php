<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Offre extends Model
{

    //utilisateur
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
    public function utilisateurs()
    {
        return $this->belongsTo(utilisateur::class);
    }
    public function Utilisateur()
    {
        return $this->belongsToMany('App\Utilisateur');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function image()
    {
        return $this->belongsTo('App\Image', 'offre_id', 'id');
    }
}
