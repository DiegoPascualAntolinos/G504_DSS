<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cities')->unsigned();
            $table->integer('id_offers')->unsigned();
            $table->foreign('id_cities')->references('id')->on('cities');
            $table->foreign('id_offers')->references('id')->on('offers');
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
        Schema::dropIfExists('cities_offers');
    }
}
