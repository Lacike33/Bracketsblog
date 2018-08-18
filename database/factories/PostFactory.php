<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'title' => $faker->sentence(rand(1,5),true),
        'description' => $faker->sentence,
//        'description'=>$faker->text(255),
        'content' => $faker->paragraphs(5,true)
    ];
});
