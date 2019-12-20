<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'text' => $faker->text,
        'hot_deals' => 0,
        'price' => 100,
        'color' => 'white',
        'is_new' => 0,
        'is_best' => 0,
        'category_id' => 1
    ];
});
