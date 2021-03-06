<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Film::class, function (Faker $faker) {
    $createdAt = $faker->dateTimeBetween('-3 months', '-2 months');
    $title = $faker->word;
    return [
        'title' =>$title,
        'meta_title'=>$title,
        'meta_description'=>$title,
        'keywords'=>$title,
        'image'=>"",
        'slug'=>Str::slug($title),
        'status'=>1,
        'kinopoisk_id'=>1,
        'content'=>$faker->sentence(20),
        'year'=>$faker->year,
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];
});
