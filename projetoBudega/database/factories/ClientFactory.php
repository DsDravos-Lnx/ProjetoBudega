<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'cpf' => $faker->cpf,
		'contact' => $faker->phoneNumber,
		'address' => $faker->name,
		'gender' => 'male',

	];
});
