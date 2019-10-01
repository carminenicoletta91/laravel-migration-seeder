<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      "firstname" => $faker -> firstName,
      "lastname"  => $faker -> lastName,
      "birthDay"  => $faker -> date,
      "jobTitle"  => $faker -> jobTitle,
      "salary"  => $faker -> randomFloat(3,1000,4000)
    ];
});
