<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'text' => 'Viaje perfecto y todo gracias a la maravillosa organización de Dsstinos.'
        ]);
    }
}
