<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\TypeFilm::class, function (Faker $faker) {

    $createdAt = $faker->dateTimeBetween('-3 months','-2 months');

    $arName = ["Фильм", "Сериал", "Мультфильм"];

    $name = $faker->unique()->randomElement($arName);

    return [
        "name"=>$name,
        'created_at' => $createdAt,
        'updated_at' => $createdAt
    ];
});
