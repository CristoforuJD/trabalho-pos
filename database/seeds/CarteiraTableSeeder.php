<?php

use Illuminate\Database\Seeder;
use App\Carteira;

class CarteiraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Carteira::class, 10)->create();
    }
}
