<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreacionTablaTokenSesion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokensesion', function (Blueprint $table) {
            $table->String('token',45);
			$table-> bigInteger('fkUsuario')->unsigned();
			$table-> date('expira');

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
        Schema::dropIfExists('tokensesion');
    }
}
