<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'fechaLlegada' => '10/03/2018',
            'fechaSalida' => '20/03/2018',
            'cantidad' => '100',
            'id_users' => '2',
            'id_flight' => '1'
        ]);

        DB::table('reservations')->insert([
            'fechaLlegada' => '10/03/2018',
            'fechaSalida' => '30/03/2018',
            'cantidad' => '30',
            'id_users' => '1',
            'id_flight' => '2'
        ]);

        DB::table('reservations')->insert([
            'fechaLlegada' => '05/02/2018',
            'fechaSalida' => '20/02/2018',
            'cantidad' => '55',
            'id_users' => '3',
            'id_flight' => '3'
        ]);
    }
}
