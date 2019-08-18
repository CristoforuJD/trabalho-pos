<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BancoTableSeeder::class);
        $this->call(CarteiraTableSeeder::class);
        $this->call(ProjetoTableSeeder::class);
        $this->call(TipoRecebivelTableSeeder::class);
        $this->call(UtilizacaoDeRecursoTableSeeder::class);
    }
}
