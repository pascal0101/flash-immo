<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOffre extends Model
{
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }

    public function biens()
    {
        return $this->hasMany('App\Bien');
    }
    public function bien()
    {
        return $this->belongsTo('App\Bien');
    }
}
