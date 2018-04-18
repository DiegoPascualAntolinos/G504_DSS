<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precio');
            $table->date('fechaVuelo');
            $table->string('plazasDisponibles');
            
            $table->integer('id_ciudad_origen')->unsigned()->default(0);
            $table->foreign('id_ciudad_origen')->references('id')->on('cities');
            
            $table->integer('id_ciudad_destino')->unsigned()->default(0);
            $table->foreign('id_ciudad_destino')->references('id')->on('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
