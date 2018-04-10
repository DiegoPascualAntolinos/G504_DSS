<?php

use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([
            'precio' => '60',
            'fechaVuelo' => '10/03/2018',
            'plazasDisponibles' => '20'
        
        ]);

        DB::table('flights')->insert([
            'precio' => '120',
            'fechaVuelo' => '01/05/2018',
            'plazasDisponibles' => '15'
           
        ]);

        DB::table('flights')->insert([
            'precio' => '500',
            'fechaVuelo' => '11/10/2018',
            'plazasDisponibles' => '34'
            
        ]);
    }
}
