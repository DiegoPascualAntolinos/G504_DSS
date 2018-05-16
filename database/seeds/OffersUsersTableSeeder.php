<?php

use Illuminate\Database\Seeder;

class OffersUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers_users')->insert([
            'user_id' => '1',
            'offer_id' => '3'
        ]);

        DB::table('offers_users')->insert([
            'user_id' => '2',
            'offer_id' => '2'
        ]);

        DB::table('offers_users')->insert([
            'user_id' => '3',
            'offer_id' => '1'
        ]);

        
    }
}