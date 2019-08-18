<?php

use Illuminate\Database\Seeder;
use App\Banco;

class BancoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Banco::class, 10)->create();
    }
}
