<?php

/** @var Factory $factory */

use Faker\Generator as Faker;
use Fh\Clubs\Models\City;
use Illuminate\Database\Eloquent\Factory;

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->city,
        'code' => $faker->unique()->bothify('###'),
    ];
});
