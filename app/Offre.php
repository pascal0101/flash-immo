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
