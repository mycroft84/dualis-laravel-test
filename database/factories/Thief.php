<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Thief::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
