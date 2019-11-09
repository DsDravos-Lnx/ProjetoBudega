<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'cnpj' => $faker->unique()->cpf,
		'address' => $faker->address,
		'contact' => $faker->cellphonenumber,
	];
});
