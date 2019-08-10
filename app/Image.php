<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function offre()
    {
        return $this->belongsTo(offre::class);
    }
}
