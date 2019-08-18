<?php

use Illuminate\Database\Seeder;
use App\Bordero;

class BorderoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bordero::class, 10)->create();
    }
}
