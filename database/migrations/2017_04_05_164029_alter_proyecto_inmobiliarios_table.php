<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProyectoInmobiliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyecto_inmobiliarios', function (Blueprint $table) {
            //
            $table->string('caracteristicas')->after('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyecto_inmobiliarios', function (Blueprint $table) {
            //
            $table->dropColumn('caracteristicas');
        });
    }
}
