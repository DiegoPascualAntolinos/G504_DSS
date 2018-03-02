<?php

use Illuminate\Database\Seeder;

class usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([

            'DNI' => '1234568X',
            'Nombre' => 'Laura Martinez Soler',
            'Direccion' => 'C/Jornet Perales 2',
            'Email' => 'laureta91@gmail.com',
            'Telefono' => '962901167',
            'Tipo' => 'Particular'
        ]);

        DB::table('usuario')->insert([

            'DNI' => '6235568Z',
            'Nombre' => 'Pedro Ferrero Calabuig',
            'Direccion' => 'C/Mayor 4',
            'Email' => 'pfc21@gmail.com',
            'Telefono' => '672901167',
            'Tipo' => 'Particular'
        ]);

        DB::table('usuario')->insert([

            'DNI' => '8976535P',
            'Nombre' => 'Pepica Calatayud Pla',
            'Direccion' => 'C/Albacete 5',
            'Email' => 'calatayud125@gmail.com',
            'Telefono' => '66890762',
            'Tipo' => 'Particular'
        ]);
    }
}
