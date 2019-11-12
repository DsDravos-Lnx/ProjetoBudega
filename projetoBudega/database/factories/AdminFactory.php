<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'login' => $faker->unique()->userName,
		'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
		'created_by' => $faker->name,
		'update_by' => $faker->name,
	];
});
