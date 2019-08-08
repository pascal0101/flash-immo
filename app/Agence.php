<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgenceImmobiliere extends Model
{

    public function Offre()
    {
        return $this->belongsTo('App\Offre');
    }
    public function Offres()
    {
        return $this->hasMany('App\Offre');
    }
}
