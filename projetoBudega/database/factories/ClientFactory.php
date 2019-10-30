<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Client;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cpf' => '999.999.999-99',
        'contact' => $faker->phoneNumber,
        'address' => $faker->name,
        'gender' => 'male',
        
        
    ];
});
