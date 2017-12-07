<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Answers::class, function (Faker $faker) {
    return [
        "text"=>$faker->sentence,
        "is_right"=>$faker->boolean
    ];
});
