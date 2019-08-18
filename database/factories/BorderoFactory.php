<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Bordero;
use Faker\Generator as Faker;

$factory->define(Bordero::class, function (Faker $faker) {
    return [
        'pro_id' => factory(\App\Projeto::class)->create()->getKey(),
        'bco_id' => factory(\App\Banco::class)->create()->getKey(),
        'car_id' => factory(\App\Carteira::class)->create()->getKey(),
        'tir_id' => factory(\App\TipoRecebivel::class)->create()->getKey(),
        'url_id' => factory(\App\TipoRecebivel::class)->create()->getKey(),
    ];
});
