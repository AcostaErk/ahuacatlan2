<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class tabla_usuario_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')-> insert(array(
		'correo'=>'jorge123@gmail.com',
		'nombre'=>'Jorge Contreras',
		'password'=>'Jorge123',
		'fkDependencia'=>1,
		'fkRol'=>4
		));
      
	  

    }
}
