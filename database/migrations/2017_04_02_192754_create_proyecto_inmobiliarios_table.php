<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoInmobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_inmobiliarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreProyecto');
            $table->string('tipoInmueble');
            $table->string('ubicacion');
            $table->string('descripcion');
            $table->string('caracteristicas');
            $table->string('imagen_principal');
            $table->string('latitud');
            $table->string('longitud');
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
        Schema::drop('proyecto_inmobiliarios');
    }
}
