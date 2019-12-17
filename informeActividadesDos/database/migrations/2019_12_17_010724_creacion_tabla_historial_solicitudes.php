z<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreacionTablaHistorialSolicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialSolicitudes', function (Blueprint $table) {
            $table->bigIncrements('idHistorial');;
			$table->date('fecha');
			$table->String('detalle',50);
			$table->String('historialSolicitudesCol',50);
			
			$table-> bigInteger('fkSolicitud')->unsigned();
			$table-> bigInteger('fkUsuario')->unsigned();
			
            $table-> foreign('fkSolicitud')->references('idSolicitudes')->on('solicitudes');
			 $table-> foreign('fkUsuario')->references('idUsuario')->on('usuario');
            $table->engine = "InnoDB";
			
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historialSolicitudes');
    }
}
