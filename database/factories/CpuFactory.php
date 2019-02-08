<?php

use Faker\Generator as Faker;

$factory->define(App\Cpu::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'productcode' => $faker ->word,
        'brand' => $faker ->word,
        'codename' => $faker ->word,
        'core' => $faker ->numberBetween($min=1, $max=32),
        'socket' => $faker ->numberBetween($min=1000, $max=1200)
    ];
});
