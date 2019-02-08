<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => App\User::all()->random()->id,
        'article_id' => App\Article::all()->random()->id
    ];
});
