<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //$tipousuario = DB::select('SELECT id FROM tipousuario WHERE titulo = ? ', ['Administrador']);

        $tipousuario = db::table('tipousuario')->select('id')->first();
        //$tipousuario[0]->id

        DB::table('users')->insert([
        	'nombres' => 'Jose Manuel',
        	'apellidos' => 'Malpartida Calderon',
        	'email' => 'ing.jmalpartidac@gmail.com',
        	'password' => bcrypt('laravel'), //encriptado
            'tipousuario_id' => $tipousuario->id,
        ]);
    }
}
