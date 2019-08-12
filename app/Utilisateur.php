<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    //bien
    public function lebien()
    {
        return $this->belongsTo('App\Bien');
    }
    public function Bien()
    {
        return $this->hasMany('App\Bien');
    }


    public function Biens()
    {
        return $this->belongsToMany('App\Bien');
    }

    //Message
    public function Messages()
    {
        return $this->belongsToMany('App\Utilisateur');
    }
    //users
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function offres()
    {
        return $this->hasMany(utilisateur::class);
    }
}
