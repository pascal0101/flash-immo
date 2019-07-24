<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\TypeBien::class, function (Faker $faker) {
    return [
        'LibelleTypeBien' => $faker->text(15)
    ];
});
