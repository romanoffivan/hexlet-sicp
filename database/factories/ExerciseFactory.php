<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exercise;
use Faker\Generator as Faker;

$factory->define(Exercise::class, function (Faker $faker) {
    return [
        'path' => $faker->numerify('#.#.#'),
        'chapter_id' => null,
    ];
});
