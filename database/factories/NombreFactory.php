<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nombre;
use Faker\Generator as Faker;

$factory->define(Nombre::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});
