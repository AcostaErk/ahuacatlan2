<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreacionTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
			$table->String('correo',45);
			$table->String('nombre',45);
			$table->String('password',45);
            $table-> bigInteger('fkDependencia')->unsigned();
			$table-> bigInteger('fkRol')->unsigned();
			 
            $table-> foreign('fkDependencia')->references('idDependencia')->on('dependencia');
			$table-> foreign('fkRol')->references('idRol')->on('rol');
			
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
        Schema::dropIfExists('usuario');
    }
}
