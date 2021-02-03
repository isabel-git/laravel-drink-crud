<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [

        'name'  => $faker -> word(),
        'degres'  => rand(1, 99),
        'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 5, $max = 100),
    ];
});
