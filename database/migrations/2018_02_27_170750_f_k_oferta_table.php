<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FKOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oferta', function (Blueprint $table) {
            $table->string('empresa_CIF')->default('default_value');
            $table->foreign('empresa_CIF')->references('CIF')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oferta', function (Blueprint $table) {
            //
        });
    }
}
