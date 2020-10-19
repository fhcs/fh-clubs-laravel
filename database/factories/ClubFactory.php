<?php

/** @var Factory $factory */

use Faker\Generator as Faker;
use Fh\Clubs\Models\City;
use Fh\Clubs\Models\Club;
use Fh\Clubs\Models\ClubType;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Club::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->bothify('##'),
        'name' => $faker->unique()->text(20),
        'address' => $faker->address,
        'map_latitude' => $faker->latitude,
        'map_longitude' => $faker->longitude,

        'city_id' => factory(City::class)->create(),
        'type_id' => factory(ClubType::class)->create(),
    ];
});
