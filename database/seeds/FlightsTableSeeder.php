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
            'cod' => '90',
            'precio' => '60',
            'fechaVuelo' => '10/03/2018'
        
        ]);

        DB::table('flights')->insert([
            'cod' => '123',
            'precio' => '120',
            'fechaViaje' => '01/05/2018'
           
        ]);

        DB::table('fligths')->insert([
            'cod' => '298',
            'precio' => '500',
            'fechaVuelo' => '11/10/2018'
            
        ]);
    }
}
