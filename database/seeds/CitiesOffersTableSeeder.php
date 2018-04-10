<?php

use Illuminate\Database\Seeder;

class CitiesOffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities_offers')->insert([
            'id_cities' => '1',
            'id_offers' => '2'
        ]);

        DB::table('cities_offers')->insert([
            'id_cities' => '2',
            'id_offers' => '1'
        ]);

        DB::table('cities_offers')->insert([
            'id_cities' => '3',
            'id_offers' => '3'
        ]);
    }
}
