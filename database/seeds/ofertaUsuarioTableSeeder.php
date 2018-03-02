<?php

use Illuminate\Database\Seeder;

class ofertaUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ofertaUsuario')->insert([
            'DNI' => '1234568X',
            'id' => '001'
        ]);

        DB::table('ofertaUsuario')->insert([
            'dni' => '6235568Z',
            'id' => '002'
            ]);

        DB::table('ofertaUsuario')->insert([
            'dni' => '8976535P',
            'id' => '003'
            ]);
    }
}
