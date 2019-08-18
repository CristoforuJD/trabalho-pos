<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Carteira;
use Faker\Generator as Faker;

$factory->define(Carteira::class, function (Faker $faker) {
    return [
        'car_nome' => $faker->word,
        'car_ativo' => 1,
        'car_dtsis' => now(),
    ];
});
