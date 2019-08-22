<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{

    //protected $fillable = [LibelleTypeBien];

    public function Offres()
    {
        return $this->hasMany(Offre::class);
    }
    public function Offre()
    {
        return $this->belongsTo('App\Offre');
    }
}
