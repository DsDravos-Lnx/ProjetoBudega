<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Purshase;
use Faker\Generator as Faker;

$factory->define(Purshase::class, function (Faker $faker) {
	return [
		'amount' => $faker->randomDigit,
		'price' => $faker->randomDigit,
		'credited' => $faker->boolean,
		'created_by' => $faker->name,
		'update_by' => $faker->name,
	];
});
