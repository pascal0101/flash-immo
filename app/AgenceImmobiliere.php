<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgenceImmobiliere extends Model
{

    public function bien()
    {
        return $this->belongsTo('App\Bien');
    }
    public function biens()
    {
        return $this->hasMany('App\Bien');
    }
}
