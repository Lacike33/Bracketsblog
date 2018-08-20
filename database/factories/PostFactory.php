<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title =$faker->sentence(rand(1,5),true);
    return [
        'user_id' => User::all()->random()->id,
        'title' => $title,
        'slug' => str_slug($title),
        'description' => $faker->sentence,
//        'description'=>$faker->text(255),
        'content' => $faker->paragraphs(5,true),
//        TODO: doriesit generovanie datumu
//        'created_at' => $faker->rand
    ];
});
