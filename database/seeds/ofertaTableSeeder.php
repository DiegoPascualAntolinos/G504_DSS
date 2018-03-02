<?php

use Illuminate\Database\Seeder;

class ofertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Añadimos una entrada a esta tabla
        DB::table('oferta')->insert([
            'id' => '001',
            'precio' => '499',
            'Nombre' => 'La fuente de felicidad',
            'FechaViaje' => '10/03/2018',
            'Origen' => 'Alicante',
            'Destino' => 'Italia',
            'FechaFinOferta' => '20/03/2018'
        ]);

        DB::table('oferta')->insert([
            'id' => '002',
            'precio' => '328',
            'Nombre' => 'Vida alegre',
            'FechaViaje' => '01/05/2018',
            'Origen' => 'Madrid',
            'Destino' => 'Ibiza',
            'FechaFinOferta' => '04/05/2018'
        ]);

        DB::table('oferta')->insert([
            'id' => '003',
            'precio' => '500',
            'Nombre' => 'Escapada romántica',
            'FechaViaje' => '11/10/2018',
            'Origen' => 'Alicante',
            'Destino' => 'Tenerife',
            'FechaFinOferta' => '18/10/2018'
        ]);
    }
}
