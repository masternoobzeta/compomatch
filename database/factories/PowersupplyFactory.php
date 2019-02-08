<?php

use Faker\Generator as Faker;

$factory->define(App\Powersupply::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'productcode' => $faker ->word,
        'brand' => $faker ->word,
        'wattage' => $faker ->numberBetween($min=200, $max=1200),
    ];
});
