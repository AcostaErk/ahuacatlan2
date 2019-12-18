<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class tabla_rol_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')-> insert(array(
		'nombreRol'=>'Oficialia'
		));
		
		 DB::table('rol')-> insert(array(
		'nombreRol'=>'Secretaria'
		));
		
		 DB::table('rol')-> insert(array(
		'nombreRol'=>'Departamento'
		));
		
		 DB::table('rol')-> insert(array(
		'nombreRol'=>'Solicitante'
		));
    }
}
