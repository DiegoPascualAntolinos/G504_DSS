<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'id' => '01',
            'dni' => '1234568X',
            'nombre' => 'Laura Martinez Soler',
            'direccion' => 'C/Jornet Perales 2',
            'email' => 'laureta91@gmail.com',
            'telefono' => '962901167',
            'tipo' => 'Particular'
        ]);

        DB::table('clients')->insert([
            'id' => '02',
            'dni' => '6235568Z',
            'nombre' => 'Pedro Ferrero Calabuig',
            'direccion' => 'C/Mayor 4',
            'email' => 'pfc21@gmail.com',
            'telefono' => '672901167',
            'tipo' => 'Particular'
        ]);

        DB::table('clients')->insert([
            'id' => '03',
            'dni' => '8976535P',
            'nombre' => 'Pepica Calatayud Pla',
            'direccion' => 'C/Albacete 5',
            'email' => 'calatayud125@gmail.com',
            'telefono' => '66890762',
            'tipo' => 'Particular'
        ]);
    }
}
