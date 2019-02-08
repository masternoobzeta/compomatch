<?php

use Faker\Generator as Faker;

$factory->define(App\Hardware::class, function (Faker $faker) {
    return [
        'name' => $faker ->word,
        'motherboard_id' => App\Motherboard::all()->random()->id,
        'tower_id' => App\Tower::all()->random()->id,
        'powersupply_id' => App\Powersupply::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
    ];
});
