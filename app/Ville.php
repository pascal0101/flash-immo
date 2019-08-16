<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{

    public function  Offres()
    {
        return $this->hasMany(Offre::class);
    }
}
