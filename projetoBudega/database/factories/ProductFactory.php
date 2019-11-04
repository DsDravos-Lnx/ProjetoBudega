<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'description' => 'Product description here.',
		'image' => 'photo here',
		'price' => 99.99,
		'available' => true,
	];
});
