<?php

use Illuminate\Database\Seeder;
use App\Projeto;

class ProjetoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Projeto::class, 10)->create();
    }
}
