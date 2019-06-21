<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {

            /**
             * En este caso en particular se hace referencia tanto a la tabla de mascotas en funcion de vinculo entre la receta y
             * la mascota y en igual forma ocurre con los farmacos, se adiciona el campo indicaciones para la respectiva indicacion de medicacion.
             */


            $table->bigIncrements('folio');
            $table->String('rutdueno');
            $table->foreign('rutdueno')->references('rut')->on('duenos')->onDelete('cascade');
            $table->String('nom_farm');
            $table->foreign('nom_farm')->references('nombre')->on('farmacos')->onDelete('cascade');
            $table->String('indicacion');
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
        Schema::dropIfExists('recetas');
    }
}
