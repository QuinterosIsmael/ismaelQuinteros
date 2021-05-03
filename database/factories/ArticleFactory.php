<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(2),
        'tipo'=> $faker->word,
        'cantidad'=> $faker->randomDigitNotNull,
        'coste'=> $faker->randomFloat($nbMaxDecimals =2, $min = 0, $max = NULL)
    ];
});
