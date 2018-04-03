<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_clients')->unsigned();
            $table->integer('id_offers')->unsigned();
            $table->foreign('id_clients')->references('id')->on('clients');
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
        Schema::dropIfExists('clients_offers');
    }
}
