<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(usuarioTableSeeder::class);
        $this->call(ofertaTableSeeder::class);
        $this->call(empresaTableSeeder::class);
        $this->call(ofertaUsuarioTableSeeder::class);

    }
}
