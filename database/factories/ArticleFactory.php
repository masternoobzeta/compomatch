<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->text,
        'user_id' => App\User::all()->random()->id,
    ];
});
