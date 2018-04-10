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
        DB::table('clients_offers')->insert([
            'id_clients' => '1',
            'id_offers' => '3'
        ]);

        DB::table('clients_offers')->insert([
            'id_clients' => '2',
            'id_offers' => '2'
        ]);

        DB::table('clients_offers')->insert([
            'id_clients' => '3',
            'id_offers' => '1'
        ]);

        
    }
}
