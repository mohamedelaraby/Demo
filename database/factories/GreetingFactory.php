<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Greeting;
use Faker\Generator as Faker;

$factory->define(Greeting::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(),
    ];
});
