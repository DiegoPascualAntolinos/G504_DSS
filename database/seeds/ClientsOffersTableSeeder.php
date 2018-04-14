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
        DB::table('client_offer')->insert([
            'client_id' => '1',
            'offer_id' => '3'
        ]);

        DB::table('client_offer')->insert([
            'client_id' => '2',
            'offer_id' => '2'
        ]);

        DB::table('client_offer')->insert([
            'client_id' => '3',
            'offer_id' => '1'
        ]);

        
    }
}
