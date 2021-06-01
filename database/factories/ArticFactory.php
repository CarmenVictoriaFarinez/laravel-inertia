<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artic;
use Faker\Generator as Faker;

$factory->define(Artic::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->text($maxNbChars = 200)
    ];
});
