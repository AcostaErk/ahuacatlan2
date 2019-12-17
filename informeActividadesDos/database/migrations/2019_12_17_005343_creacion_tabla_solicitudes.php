<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreacionTablaSolicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('idSolicitudes');
			$table->date('fechaRecibido');
			$table->date('fechaResolucion');
			$table-> String('solicitante',45);
			$table-> String('telSolicitante',45);
			$table-> String('correoSolicitante',45);
			$table-> String('domicilio',45);
			$table-> String('documento',45);
			
			$table-> bigInteger('fkStatus')->unsigned();
			$table-> bigInteger('fkComunidad')->unsigned();
			$table-> bigInteger('fkDependencia')->unsigned();
			
			$table-> foreign('fkStatus')->references('idStatus')->on('status');
			$table-> foreign('fkComunidad')->references('idComunidad')->on('comunidad');
            $table-> foreign('fkDependencia')->references('idDependencia')->on('dependencia');
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
        Schema::dropIfExists('solicitudes');
    }
}
