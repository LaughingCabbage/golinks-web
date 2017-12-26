<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'body' => $faker->paragraph,
        'slug' => $faker->slug,
        'created_at' => $faker->date(),
    ];
});
