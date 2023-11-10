<?php

namespace Database\Seeders;

use App\Models\Grado;
use Illuminate\Database\Seeder;

class gradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grado = new Grado();
        $grado->grado = 'SEXTO';
        $grado->descripcion = 'DESCRIPCION DEL GRADO';
        $grado->idCurso = 1;
        $grado->save();

        $grado = new Grado();
        $grado->grado = 'SEPTIMO';
        $grado->descripcion = 'DESCRIPCION DEL GRADO';
        $grado->idCurso = 1;
        $grado->save();

        $grado = new Grado();
        $grado->grado = 'OCTAVO';
        $grado->descripcion = 'DESCRIPCION DEL GRADO';
        $grado->idCurso = 1;
        $grado->save();

        $grado = new Grado();
        $grado->grado = 'NOVENO';
        $grado->descripcion = 'DESCRIPCION DEL GRADO';
        $grado->idCurso = 1;
        $grado->save();

        $grado = new Grado();
        $grado->grado = 'NOVENO';
        $grado->descripcion = 'DESCRIPCION DEL GRADO';
        $grado->idCurso = 1;
        $grado->save();
        
        $grado = new Grado();
        $grado->grado = 'DECIMO';
        $grado->descripcion = 'DESCRIPCION DEL GRADO';
        $grado->idCurso = 1;
        $grado->save();

        $grado = new Grado();
        $grado->grado = 'ONCE';
        $grado->descripcion = 'DESCRIPCION DEL GRADO';
        $grado->idCurso = 1;
        $grado->save();
    }
}
