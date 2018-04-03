<?php

use Illuminate\Database\Seeder;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'id3' => '0001',
            'fechaLlegada' => '10/03/2018',
            'fechaSalida' => '20/03/2018',
            'cantidad' => '100'
        ]);

        DB::table('reservations')->insert([
            'id3' => '0001',
            'fechaLlegada' => '10/03/2018',
            'fechaSalida' => '20/03/2018',
            'cantidad' => '100'
        ]);

        DB::table('reservations')->insert([
            'id3' => '0001',
            'fechaLlegada' => '10/03/2018',
            'fechaSalida' => '20/03/2018',
            'cantidad' => '100'
        ]);
    }
}
