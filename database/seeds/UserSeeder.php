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
    public function run()
    {
        DB::table('users')->insert([
        	'nombres' => 'Jose Manuel',
        	'apellidos' => 'Malpartida Calderon',
        	'email' => 'ing.jmalpartidac@gmail.com',
        	'password' => bcrypt('laravel'), //encriptado
        ]);
    }
}
