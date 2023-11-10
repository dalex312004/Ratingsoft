<?php

namespace Database\Seeders;

use App\Models\TipoIdentificacion;
use Illuminate\Database\Seeder;

class TipoIdentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoIdentificacion = new TipoIdentificacion();
        $tipoIdentificacion->codigo = "CC";
        $tipoIdentificacion->detalle = "CEDULA";
        $tipoIdentificacion->save();

        $tipoIdentificacion = new TipoIdentificacion();
        $tipoIdentificacion->codigo = "TI";
        $tipoIdentificacion->detalle = "TARJETA DE IDENTIDAD";
        $tipoIdentificacion->save();

        $tipoIdentificacion = new TipoIdentificacion();
        $tipoIdentificacion->codigo = "PAS";
        $tipoIdentificacion->detalle = "PASAPORTE";
        $tipoIdentificacion->save();

        $tipoIdentificacion = new TipoIdentificacion();
        $tipoIdentificacion->codigo = "CE";
        $tipoIdentificacion->detalle = "CEDULA DE EXTRANJERIA";
        $tipoIdentificacion->save();
    }
}
