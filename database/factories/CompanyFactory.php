<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Company;
use Faker\Generator as Faker;
$factory->define(Company::class, function (Faker $faker) {
    return [
      "name" => $faker -> company,
      "phone" => $faker -> phoneNumber,
      "mail" => $faker -> email,
      "website" => $faker -> url
    ];
});
