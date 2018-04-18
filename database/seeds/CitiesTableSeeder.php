<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'pais' => 'España',
            'provincia' => 'Alicante',
            'ciudad' => 'Alicante'

        ]);

        DB::table('cities')->insert([
            'pais' => 'España',
            'provincia' => 'Andalucia',
            'ciudad' => 'Sevilla'
        ]);

        DB::table('cities')->insert([
            'pais' => 'España',
            'provincia' => 'Andalucia',
            'ciudad' => 'Granada'
        ]);
    }
}
