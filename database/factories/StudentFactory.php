<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Student::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName(),
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'birthdate' => $faker->date(),
        'option' => $faker->randomElement(['SLAM','SISR']),
        'insee' => $faker->unique()->numerify('##############')
        ];
});


