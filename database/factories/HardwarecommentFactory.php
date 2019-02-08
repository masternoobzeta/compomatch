<?php

use Faker\Generator as Faker;

$factory->define(App\Hardwarecomment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => App\User::all()->random()->id,
        'hardware_id' => App\Hardware::all()->random()->id
    ];
});
