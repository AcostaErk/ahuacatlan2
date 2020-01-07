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

    DB::table('usuario')-> insert(array(
'correo'=>'javier123@gmail.com',
'nombre'=>'Javier Machain',
'password'=>'Javier123',
'fkDependencia'=>2,
'fkRol'=>2
));

DB::table('usuario')-> insert(array(
'correo'=>'samuel123@gmail.com',
'nombre'=>'Samuel Tarula',
'password'=>'Samuel123',
'fkDependencia'=>3,
'fkRol'=>1
));

DB::table('usuario')-> insert(array(
'correo'=>'ramon123@gmail.com',
'nombre'=>'Ramon Verdin',
'password'=>'Ramon123',
'fkDependencia'=>4,
'fkRol'=>3
));





    }
}
