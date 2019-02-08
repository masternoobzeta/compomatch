<?php

use Faker\Generator as Faker;

$factory->define(App\Tower::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'productcode' => $faker ->word,
        'brand' => $faker ->word,
        'color' => $faker ->colorName,
        'width' => $faker ->numberBetween($min=20, $max=50),
        'height' => $faker ->numberBetween($min=20, $max=50),
        'depth' => $faker ->numberBetween($min=20, $max=50)
    ];
});
