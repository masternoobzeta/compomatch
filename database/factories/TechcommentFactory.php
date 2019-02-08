<?php

use Faker\Generator as Faker;

$factory->define(App\Techcomment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => App\User::all()->random()->id,
        'techarticle_id' => App\Techarticle::all()->random()->id
    ];
});
