<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	return [
		'amount' => 'very',
		'price' => 10.50,
		'credited' => true,
	];
});
