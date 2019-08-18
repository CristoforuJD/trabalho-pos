<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UtilizacaoDeRecurso;
use Faker\Generator as Faker;

$factory->define(UtilizacaoDeRecurso::class, function (Faker $faker) {
    return [
        'url_nome' => $faker->word,
        'url_ativo' => 1,
        'url_dtsis' => now(),
    ];
});
