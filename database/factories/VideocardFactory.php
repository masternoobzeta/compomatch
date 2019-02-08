<?php

use Faker\Generator as Faker;

$factory->define(App\Videocard::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'productcode' => $faker ->word,
        'brand' => $faker ->word,
        'gpu' => $faker ->numberBetween($min=100, $max=1100),
        'serie' => $faker ->word,
        'memory' => $faker ->numberBetween($min=1, $max=6000)
    ];
});
