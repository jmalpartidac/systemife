<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipousuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipousuario')->insert([
        	'titulo' => 'Administrador',
        ]);

        DB::table('tipousuario')->insert([
        	'titulo' => 'Supervisor',
        ]);

        DB::table('tipousuario')->insert([
        	'titulo' => 'Vendedor',
        ]);
    }
}
