<?php

namespace App\Http\Requests;

use App\Ville;

class VilleRequest extends FormRequest
{
    public function listville()
    {
        $ville = ville::all();

        return $ville;
    }
}
