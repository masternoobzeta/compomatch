<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'comment' => $faker->text,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
