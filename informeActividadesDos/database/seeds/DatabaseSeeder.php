<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(tabla_rol_seeder::class);
		$this->call(tabla_dependencia_seeder::class);
		$this->call(tabla_usuario_seeder::class);
    }
}
