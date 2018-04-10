<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaLlegada');
            $table->date('fechaSalida');
            $table->string('cantidad');

            $table->integer('id_clients')->unsigned()->default(0);
            $table->foreign('id_clients')->references('id')->on('clients');
            
            $table->integer('id_flight')->unsigned()->default(0);
            $table->foreign('id_flight')->references('id')->on('flights');
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
        Schema::dropIfExists('reservations');
    }
}
