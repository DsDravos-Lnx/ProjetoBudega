<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CreditedPay;
use Faker\Generator as Faker;

$factory->define(CreditedPay::class, function (Faker $faker) {
	return [
		'credited' => $faker->boolean(),
		'created_by' => $faker->name,
		'update_by' => $faker->name,
	];
});
