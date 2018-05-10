<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'nombre' => 'SH Hotels',
            'direccion' => 'C/Napoleón 36',
            'telefono' => '93546785',
            'plazasDisponibles' => '18'
        ]);
    }
}
