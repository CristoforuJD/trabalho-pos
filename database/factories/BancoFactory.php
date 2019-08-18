<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Banco;
use Faker\Generator as Faker;

$factory->define(Banco::class, function (Faker $faker) {
    return [
        'bco_codigo' => $faker->numberBetween(0, 1000),
        'bco_nome' => $faker->word,
        'bco_ativo' => 1,
        'bco_dtsis' => now(),
    ];
});
