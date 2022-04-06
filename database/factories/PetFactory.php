<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'color' => $faker->colour,
        'date_of_birth'=> now(),
        'person_id'=> $faker -> numerify('###'),
        'remember_token' => Str::random(10),
    ];
});
