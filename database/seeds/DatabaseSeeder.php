<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitiesTableSeeder::class);
        $this->call(OffersUsersTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FlightsTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(CitiesOffersTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
     
    }
}
