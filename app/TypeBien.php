<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{

    //protected $fillable = [LibelleTypeBien];

    public function Offres()
    {
        return $this->hasMany('App\Offre');
    }
    public function Offre()
    {
        return $this->belongsTo('App\Offre');
    }
}
