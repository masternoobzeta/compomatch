<?php

use Faker\Generator as Faker;

$factory->define(App\Memory::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'productcode' => $faker ->word,
        'brand' => $faker ->word,
        'size' => $faker ->numberBetween($min=20, $max=50),
        'storage' => $faker ->numberBetween($min=1, $max=10000),
        'speed' => $faker ->numberBetween($min=4000, $max=8000)
    ];
});
