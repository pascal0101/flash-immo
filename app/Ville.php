<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
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
