<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Offre extends Model
{

    //user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function favoris()
    {
        return $this->belongsTo(Favoris::class);
    }
    public function typebien()
    {
        return $this->belongsTo(TypeBien::class, 'IdTypeBien');
    }
    public function typeoffre()
    {
        return $this->belongsTo(TypeOffre::class, 'IdTypeOffre');
    }
    //utilisateur
    public function ville()
    {
        return $this->belongsTo(Ville::class, 'IdVille');
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
