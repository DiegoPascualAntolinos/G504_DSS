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
            'id_client' => '01',
            'id_offer' => '001'
        ]);

        DB::table('clientsOffers')->insert([
            'id_client' => '02',
            'id_offer' => '002'
            ]);

        DB::table('clientsOffers')->insert([
            'id_client' => '03',
            'id_offer' => '003'
            ]);
    }
}
