<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cpf' => '999.999.999-99',
        'contact' => '(99) 99999-9999',
        'address' => $faker->name,
        

    ];
});
