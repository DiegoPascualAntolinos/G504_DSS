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
            //'id3' => '0001',
            'fechaLlegada' => '10/03/2018',
            'fechaSalida' => '20/03/2018',
            'cantidad' => '100'
        ]);

        DB::table('reservations')->insert([
            //'id3' => '0002',
            'fechaLlegada' => '10/03/2018',
            'fechaSalida' => '30/03/2018',
            'cantidad' => '30'
        ]);

        DB::table('reservations')->insert([
            //'id3' => '0003',
            'fechaLlegada' => '05/02/2018',
            'fechaSalida' => '20/02/2018',
            'cantidad' => '55'
        ]);
    }
}
