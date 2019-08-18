<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Projeto;
use Faker\Generator as Faker;

$factory->define(Projeto::class, function (Faker $faker) {
    return [
        'usu_coord' => 1,
        'usu_gestor' => 1,
        // 'seg_id' => '',
        'pro_nome' => $faker->word,
        'pro_ativo' => 1,
        'pro_logo' => $faker->paragraph,
        'pro_endereco' => $faker->address,
        'pro_cidade' => $faker->city,
        'pro_uf' => 'PR',
        'pro_dtsis' => now(),
        'pro_data_ence' => now()->addYear(),
    ];
});
