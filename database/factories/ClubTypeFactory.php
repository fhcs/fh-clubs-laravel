<?php

/** @var Factory $factory */

use Faker\Generator as Faker;
use Fh\Clubs\Models\ClubType;
use Illuminate\Database\Eloquent\Factory;

$factory->define(ClubType::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->bothify('##'),
        'value' => $faker->unique()->text(5),
    ];
});
