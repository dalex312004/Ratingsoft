<?php

namespace Database\Seeders;

use App\Models\Periodo;
use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periodo = new Periodo();
        $periodo->periodo = "PRIMER PERIODO";
        $periodo->fechaInicio = '2023-01-01';
        $periodo->fechaFin = '2023-03-01';
        $periodo->save();

        $periodo = new Periodo();
        $periodo->periodo = "SEGUNDO PERIODO";
        $periodo->fechaInicio = '2023-03-02';
        $periodo->fechaFin = '2023-06-02';
        $periodo->save();

        $periodo = new Periodo();
        $periodo->periodo = "TERCER PERIODO";
        $periodo->fechaInicio = '2023-06-03';
        $periodo->fechaFin = '2023-09-03';
        $periodo->save();

        $periodo = new Periodo();
        $periodo->periodo = "CUARTO PERIODO";
        $periodo->fechaInicio = '2023-09-04';
        $periodo->fechaFin = '2023-12-20';
        $periodo->save();
    }
}
