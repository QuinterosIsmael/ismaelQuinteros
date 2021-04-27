<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Moto;
use Faker\Generator as Faker;

$factory->define(Moto::class, function (Faker $faker) {
    return [
        'marca' => $faker->name,
        'modelo' => $faker->randomDigitNotNull,
        'color' => $faker->colorName,
    ];
});
