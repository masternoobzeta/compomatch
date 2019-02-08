<?php

use Faker\Generator as Faker;

$factory->define(App\Motherboard::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'productcode' => $faker ->word,
        'brand' => $faker ->word,
        'socket' => $faker -> numberBetween($min=1000, $max=1200),
        'chipset' => $faker ->word,
        'size' => $faker ->numberBetween($min=20, $max=50)
    ];
});
