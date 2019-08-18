<?php

use Illuminate\Database\Seeder;
use App\TipoRecebivel;

class TipoRecebivelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TipoRecebivel::class, 10)->create();
    }
}
