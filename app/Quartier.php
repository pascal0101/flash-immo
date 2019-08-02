<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    public function Offre()
    {
        return $this->belongsTo('App\Offre');
    }
    public function Offres()
    {
        return $this->hasMany('App\Offre');
    }
    public function Ville()
    {
        return $this->hasOne('App\Ville');
    }
    public function Villes()
    {
        return $this->belongsTo('App\Ville');
    }
}
