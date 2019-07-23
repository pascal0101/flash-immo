<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villes extends Model
{
    public function Quartiers()
    {
        return $this->hasMany('App\Quartier');
    }
    public function  Quartier()
    {
        return $this->belongsTo('App\Quartier');
    }
}
