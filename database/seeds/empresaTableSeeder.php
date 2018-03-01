<?php

use Illuminate\Database\Seeder;

class empresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa')->delete();

        DB::table('empresa')->insert([
            'CIF' => 'C64512575',
            'Nombre' => 'XTravels',
            'Direccion' => 'Calle San Juan',
            'Telefono' => '95412358',
            'Email' => 'info@xtravel.com'
        ]);

        DB::table('empresa')->insert([

            'CIF'=> 'F75614539',
            'Nombre' => 'Bella Vista',
            'Direccion' => 'Calle La Huerta',
            'Telefono' => '93245724',
            'Email' => 'bellavista@bellavista.com',
        ]);

        DB::table('empresa')->insert([

            'CIF' => 'T57483256',
            'Nombre' => 'Atlantis',
            'Direccion' => 'Calle Santiago',
            'Telefono' => '964524125',
            'Email' => 'info@atlantis.com'

        ]);
    }
}
