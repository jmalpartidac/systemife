<?php

use App\User;
use App\Models\Tipousuario;
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

        $tipousuario = Tipousuario::where('titulo', 'Administrador')->value('id');
        //$tipousuario[0]->id

        User::create([
        	'nombres' => 'Jose Manuel',
        	'apellidos' => 'Malpartida Calderon',
        	'email' => 'ing.jmalpartidac@gmail.com',
        	'password' => bcrypt('laravel'), //encriptado
            'tipousuario_id' => $tipousuario
        ]);
    }
}
