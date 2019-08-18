<?php

use Illuminate\Database\Seeder;
use App\UtilizacaoDeRecurso;

class UtilizacaoDeRecursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UtilizacaoDeRecurso::class, 10)->create();
    }
}
