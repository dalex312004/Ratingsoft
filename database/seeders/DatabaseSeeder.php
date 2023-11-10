<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(TipoIdentificacionSeeder::class);
        $this->call(Roleseeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoAsignaturaSeeder::class);
        $this->call(AsignaturaSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(gradoSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
    }

}