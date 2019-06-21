<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duenos', function (Blueprint $table) {
            /**
             * se crean los campos para la tabla dueños, los cuales contemplan informacion basica de contacto, como
             * serian tanto el rut, nombre del responsable y la direccion de este mismo.
             */
            $table->String('rut')->unique();
            $table->String('nombre');
            $table->String('direccion');
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
        Schema::dropIfExists('duenos');
    }
}
