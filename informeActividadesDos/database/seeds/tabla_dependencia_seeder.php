<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class tabla_dependencia_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependencia')-> insert(array(
		'nombre'=>'Solicitante',
		));

    DB::table('dependencia')-> insert(array(
  'nombre'=>'Secretaria',
  ));

  DB::table('dependencia')-> insert(array(
'nombre'=>'Oficialia',
));

DB::table('dependencia')-> insert(array(
'nombre'=>'CFE',
));




    }
}
