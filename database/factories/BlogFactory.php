<?php

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'slug' => $faker->slug(),
        'desc' => $faker->title,
        'content' => $faker->text(),
        'img' => $faker->imageUrl(),
        'user_id' => 1,
    ];
});
