<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address_id' => rand(1,10),
        'date_of_birth'=> now(),
    ];
});
