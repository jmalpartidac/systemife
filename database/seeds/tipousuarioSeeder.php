<?php

use App\Models\Tipousuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipousuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

//        DB::insert('INSERT INTO tipousuario (titulo) VALUES (:titulo)', [
//            'titulo' => 'Administrador',
//        ]);


//        DB::table('tipousuario')->insert([
//        	'titulo' => 'Administrador',
//       ]);

        Tipousuario::create([
            'titulo' => 'Administrador',
        ]);

        Tipousuario::create([
            'titulo' => 'Supervisor',
        ]);

        Tipousuario::create([
            'titulo' => 'Vendedor',
        ]);

        factory(Tipousuario::class)->times(17)->create();

    }
}
