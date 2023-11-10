<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->nombre = 'A';
        $curso->descripcion = 'curso a';
        $curso->save();

        
        $curso = new Curso();
        $curso->nombre = 'B';
        $curso->descripcion = 'curso b';
        $curso->save();

        
        $curso = new Curso();
        $curso->nombre = 'C';
        $curso->descripcion = 'curso c';
        $curso->save();

        
        $curso = new Curso();
        $curso->nombre = 'D';
        $curso->descripcion = 'curso d';
        $curso->save();

        
        $curso = new Curso();
        $curso->nombre = 'E';
        $curso->descripcion = 'curso e';
        $curso->save();
    }
}
