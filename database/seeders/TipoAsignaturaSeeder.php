<?php

namespace Database\Seeders;

use App\Models\TipoAsignatura;
use Illuminate\Database\Seeder;

class TipoAsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $tipoAsignatura = new TipoAsignatura();
            $tipoAsignatura->nombreTipoAsignatura = "TECNICA";
            $tipoAsignatura->descripcion = "TIPO DE ASIGNATURA TECNICA";
            $tipoAsignatura->save();
        }
    }
}
