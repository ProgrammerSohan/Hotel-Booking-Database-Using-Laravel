<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    return [

        'name' => rtrim( ucfirst($faker->text(20)), '.'),
        'description' => $faker->sentence(),
        'created_at' => $faker->dateTimeBetween('1 day', '5 days'),
        'updated_at' => $faker->dateTimeBetween('6 days', '10 days')
    ];
});
