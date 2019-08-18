<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\TipoRecebivel;
use Faker\Generator as Faker;

$factory->define(TipoRecebivel::class, function (Faker $faker) {
    return [
        'tir_nome' => $faker->word,
        'tir_ativo' => 1,
        'tir_dtsis' => now(),
    ];
});
