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
            'plazasDisponibles' => '18',
            'photo' => '/img/imagen1.png'
        ]);

        DB::table('hotels')->insert([
            'nombre' => 'AC Hotels',
            'direccion' => 'C/Alicante 17',
            'telefono' => '92197890',
            'plazasDisponibles' => '9',
            'photo' => '/img/imagen2.jpg'
        ]);

        DB::table('hotels')->insert([
            'nombre' => 'NH Hotels',
            'direccion' => 'C/Ramón Gómez 31',
            'telefono' => '91290832',
            'plazasDisponibles' => '12',
            'photo' => '/img/imagen3.jpg'
        ]);
    }
}
