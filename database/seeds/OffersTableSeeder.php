<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            //'id' => '001',
            'precio' => '499',
            'nombre' => 'La fuente de felicidad',
            'fechaViaje' => '10/03/2018',
            'origen' => 'Alicante',
            'destino' => 'Italia',
            'fechaFinOferta' => '20/03/2018'
        ]);

        DB::table('offers')->insert([
            //'id' => '002',
            'precio' => '328',
            'nombre' => 'Vida alegre',
            'fechaViaje' => '01/05/2018',
            'origen' => 'Madrid',
            'destino' => 'Ibiza',
            'fechaFinOferta' => '04/05/2018'
        ]);

        DB::table('offers')->insert([
            //'id' => '003',
            'precio' => '500',
            'nombre' => 'Escapada romántica',
            'fechaViaje' => '11/10/2018',
            'origen' => 'Alicante',
            'destino' => 'Tenerife',
            'fechaFinOferta' => '18/10/2018'
        ]);
    }
}
