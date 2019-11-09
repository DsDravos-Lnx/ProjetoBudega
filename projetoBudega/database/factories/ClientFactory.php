<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'cpf' => $faker->cpf, # Tem que botar ‘pt_BR’ no método create()
		'contact' => $faker->phoneNumber,
		'address' => $faker->address,
		'gender' => 'male', # Pode ser um boolean

	];
});
