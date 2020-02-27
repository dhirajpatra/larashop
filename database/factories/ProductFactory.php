<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $images = [
        'featured_1.png',
        'featured_2.png',
        'featured_3.png',
        'featured_4.png',
        'featured_5.png',
        'featured_6.png',
        'featured_7.png',
        'featured_8.png',
    ];

    return [
        'category_id' => $faker->numberBetween($min = 1, $max = 3),
        'brand_id' => $faker->numberBetween($min = 1, $max = 3),
        'name' => $faker->word,
        'url' => $faker->word,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'price' => $faker->numberBetween($min = 1, $max = 20),
        'content' => $faker->realText($faker->numberBetween(10, 20)),
        'image' => $faker->randomElement($array = $images),
    ];
});