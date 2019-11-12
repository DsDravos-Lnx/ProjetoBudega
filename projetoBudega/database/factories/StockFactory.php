<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
	return [
		'amount' => $faker->randomDigit,
		'type' => $faker->name,
		'created_by' => $faker->name,
		'update_by' => $faker->name,
	];
});
