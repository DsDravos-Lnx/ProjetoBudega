<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'cnpj' => $faker->cpf,
		'address' => 'Street x xxx',
		'contact' => $faker->cellphonenumber,
	];
});
