<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->increments('idImagen');
            $table->string('ruta');
            $table->string('nombreImagen');
            $table->string('descripcionImagen');
            $table->integer('proyectoFk')->unsigned();
            $table->foreign('proyectoFk')->references('id')->on('proyecto_inmobiliarios')->onDelete('cascade');
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
        Schema::drop('imagens');
    }
}
