<?php

use Illuminate\Database\Seeder;

class CitysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citys')->insert([
            'c.post' => '48686',
            'nombrePais' => 'España',
            'nombreProvincia' => 'Alicante',
            'nombreCiudad' => 'Alicante'

        ]);

        DB::table('citys')->insert([
            'c.post' => '48696',
            'nombrePais' => 'España',
            'nombreProvincia' => 'Andalucia',
            'nombreCiudad' => 'Sevilla'
        ]);

        DB::table('citys')->insert([
            'c.post' => '48675',
            'nombrePais' => 'España',
            'nombreProvincia' => 'Andalucia',
            'nombreCiudad' => 'Granada'
        ]);
    }
}
