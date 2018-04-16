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
            'precio' => '499',
            'nombre' => 'La fuente de felicidad',
            'fechaViaje' => '10/03/2018',
            'origen' => 'Alicante',
            'destino' => 'Italia',
            'descripcion' => 'Desde las crestas plateadas de los Alpes hasta el resplandeciente mar Mediterráneo, la belleza de Italia no tiene paragón. Puedes empezar el viaje visitando el Coliseo después de comerte un apetitoso plato de pasta o navegando.',
            'fechaFinOferta' => '20/03/2018'
        ]);

        DB::table('offers')->insert([
            'precio' => '328',
            'nombre' => 'Vida alegre',
            'fechaViaje' => '01/05/2018',
            'origen' => 'Madrid',
            'destino' => 'Ibiza',
            'descripcion' => '"Ibiza" significa: diviértete hasta caer rendido. Esta isla se encuentra entre los complejos de vida nocturna favoritos en Europa.',
            'fechaFinOferta' => '04/05/2018'
        ]);

        DB::table('offers')->insert([
            'precio' => '500',
            'nombre' => 'Escapada romántica',
            'fechaViaje' => '11/10/2018',
            'origen' => 'Alicante',
            'destino' => 'Tenerife',
            'descripcion' => 'Claramente influenciado por la cultura tribal de los guanches (sus habitantes originales). Aquí se encuentra el Teide, el pico más alto de España, y el conocido complejo turístico de Los Gigantes.',
            'fechaFinOferta' => '18/10/2018'
        ]);
    }
}
