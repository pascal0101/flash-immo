<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    public function biens()
    {
        return $this->hasMany('App\Bien');
    }
    public function bien()
    {
        return $this->belongsTo('App\Bien');
    }
}
