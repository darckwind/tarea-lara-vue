<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmacosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacos', function (Blueprint $table) {
            /**
             * se crean los identificadores minimos para los medicamentos, los cuales son coste, gramje y nombre,
             * dejando como P.K el nombre del medicamento ya que al ser unico puede usarse como metodo identificatorio.
             */
            $table->String('nombre')->unique();
            $table->integer('gramaje');
            $table->String('tipo');
            $table->integer('coste');
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
        Schema::dropIfExists('farmacos');
    }
}
