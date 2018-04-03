<?php

use Illuminate\Database\Seeder;

class ClientsOffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientsOffers')->insert([
            'id' => '01',
            'id' => '001'
        ]);

        DB::table('clientsOffers')->insert([
            'id' => '02',
            'id' => '002'
            ]);

        DB::table('clientsOffers')->insert([
            'id' => '03',
            'id' => '003'
            ]);
    }
}
