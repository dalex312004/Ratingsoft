<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->nombre = 'Certificado';
        $tipoDocumento->descripcion = 'certificados';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->nombre = 'Constancia';
        $tipoDocumento->descripcion = 'Constancias';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->nombre = 'Diploma';
        $tipoDocumento->descripcion = 'diplomas';
        $tipoDocumento->save();

        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->nombre = 'Acta';
        $tipoDocumento->descripcion = 'Actas';
        $tipoDocumento->save();
    }
}
