<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Place;
use Faker\Generator as Faker;

$factory->define(Place::class, function (Faker $faker) {
    return [
      "name" => $faker -> streetName,
      "address" => $faker -> address,
      "city" => $faker -> city,
      "nation" => $faker -> country
    ];
});
