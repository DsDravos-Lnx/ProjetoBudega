<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'description' => $faker->text,
		'image' => $faker->imageUrl($width = 640, $height = 480),
		'price' => $faker->randomDigit,
		'available' => $faker->boolean,
		'created_by' => $faker->name,
		'update_by' => $faker->name,
	];
});
