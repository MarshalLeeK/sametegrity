<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class cursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $cursos=new Curso();

        $cursos->name='Laravel';
        $cursos->descripcion='Practicando Laravel';
        $cursos->categoria='Desarrollo Web';
        $cursos->save();
    }
}
