<?php

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'text' => $faker->paragraphs
    ];
});
