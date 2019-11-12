<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'cnpj' => $faker->randomDigit(14),
		'address' => $faker->address,
		'contact' => $faker->randomDigit(14),
		'created_by' => $faker->name,
		'update_by' => $faker->name,
	];
});
