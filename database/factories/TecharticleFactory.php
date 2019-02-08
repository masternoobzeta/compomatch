<?php

use Faker\Generator as Faker;

$factory->define(App\Techarticle::class, function (Faker $faker) {
    return [
        'title' => $faker -> word,
        'poster' => $faker ->name,
        'body' => $faker ->sentence,
    ];
});
