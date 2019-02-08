<?php

use Faker\Generator as Faker;

$factory->define(App\Harddrive::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'productcode' => $faker ->word,
        'brand' => $faker ->word,
        'type' => $faker ->word,
        'size' => $faker ->numberBetween($min=20, $max=50),
        'storage' => $faker ->numberBetween($min=1, $max=1024)
    ];
});
