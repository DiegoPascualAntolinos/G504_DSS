<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'dni' => '1234568X',
            'nombre' => 'Laura Martinez Soler',
            'direccion' => 'C/Jornet Perales 2',
            'email' => 'laureta91@gmail.com',
            'telefono' => '962901167',
            'password' => bcrypt('123abc'),
            
        ]);

        DB::table('users')->insert([
            'dni' => '6235568Z',
            'nombre' => 'Pedro Ferrero Calabuig',
            'direccion' => 'C/Mayor 4',
            'email' => 'pfc21@gmail.com',
            'telefono' => '672901167',
            'password' => bcrypt('654abc'),
            
        ]);

        DB::table('users')->insert([
            'dni' => '8976535P',
            'nombre' => 'Pepica Calatayud Pla',
            'direccion' => 'C/Albacete 5',
            'email' => 'calatayud125@gmail.com',
            'telefono' => '66890762',
            'password' => bcrypt('hola123'),
            
        ]);
    }
}