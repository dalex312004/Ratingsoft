<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asignatura = new Asignatura();
        $asignatura->nombreAsignatura = "MATEMATICAS";
        $asignatura->codigo = "2502309";
        $asignatura->descripcion = "ASIGNATURA";
        $asignatura->idTipoAsignatura = 1;
        $asignatura->profesorEncargado = "NADIE";
        $asignatura->save();

        $asignatura = new Asignatura();
        $asignatura->nombreAsignatura = "INGLES";
        $asignatura->codigo = "2502309";
        $asignatura->descripcion = "ASIGNATURA";
        $asignatura->idTipoAsignatura = 1;
        $asignatura->profesorEncargado = "NADIE";
        $asignatura->save();
        
        $asignatura = new Asignatura();
        $asignatura->nombreAsignatura = "ESPAÑOL";
        $asignatura->codigo = "2502309";
        $asignatura->descripcion = "ASIGNATURA";
        $asignatura->idTipoAsignatura = 1;
        $asignatura->profesorEncargado = "NADIE";
        $asignatura->save();

        $asignatura = new Asignatura();
        $asignatura->nombreAsignatura = "FILOSOFIA";
        $asignatura->codigo = "2502309";
        $asignatura->descripcion = "ASIGNATURA";
        $asignatura->idTipoAsignatura = 1;
        $asignatura->profesorEncargado = "NADIE";
        $asignatura->save();

        $asignatura = new Asignatura();
        $asignatura->nombreAsignatura = "MATEMATICAS";
        $asignatura->codigo = "2502309";
        $asignatura->descripcion = "ASIGNATURA";
        $asignatura->idTipoAsignatura = 1;
        $asignatura->profesorEncargado = "NADIE";
        $asignatura->save();

        $asignatura = new Asignatura();
        $asignatura->nombreAsignatura = "INGLES";
        $asignatura->codigo = "2502309";
        $asignatura->descripcion = "ASIGNATURA";
        $asignatura->idTipoAsignatura = 1;
        $asignatura->profesorEncargado = "NADIE";
        $asignatura->save();
        
        $asignatura = new Asignatura();
        $asignatura->nombreAsignatura = "ESPAÑOL";
        $asignatura->codigo = "2502309";
        $asignatura->descripcion = "ASIGNATURA";
        $asignatura->idTipoAsignatura = 1;
        $asignatura->profesorEncargado = "NADIE";
        $asignatura->save();

        $asignatura = new Asignatura();
        $asignatura->nombreAsignatura = "FILOSOFIA";
        $asignatura->codigo = "2502309";
        $asignatura->descripcion = "ASIGNATURA";
        $asignatura->idTipoAsignatura = 1;
        $asignatura->profesorEncargado = "NADIE";
        $asignatura->save();
    }
}
