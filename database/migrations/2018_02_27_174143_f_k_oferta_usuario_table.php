<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FKOfertaUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ofertaUsuario', function (Blueprint $table) {
            $table->foreign('DNI')->references('DNI')->on('usuario')->nullable(false)->change();
            $table->foreign('id')->references('id')->on('oferta')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ofertaUsuario', function (Blueprint $table) {
            //
        });
    }
}
