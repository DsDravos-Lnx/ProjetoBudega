<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	return [
		'amount' => $faker->randomDigit,
		'price' => $faker->randomDigit,
		'credited' => $faker->boolean,
	];
});
