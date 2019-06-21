<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            /**
             * Para relacionar las tablas dueños y mascotas se utiliza una clave foranea, la cual se encarga de entrelazar mabas tablas
             */
            $table->integer('chip')->unique();
            $table->String('nombre');
            $table->String('tipo');
            $table->String('raza');
            $table->String('rutdueno');
            $table->foreign('rutdueno')->references('rut')->on('duenos')->onDelete('cascade');
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
        Schema::dropIfExists('mascotas');
    }
}
