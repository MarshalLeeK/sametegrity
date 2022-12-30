<?php

namespace Database\Seeders;

use App\Models\forms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $form = new forms;
        $form->id = '9819568b-93f2-4533-bf02-8b9ea22a330a';
        $form->name = 'OMS - ASSIST';
        $form->prefix = 'AST';
        $form->version = '3.0';
        $form->description = 'Gracias por aceptar esta breve entrevista sobre alcohol, y otras drogas. A continuación, le haré algunas preguntas sobre su experencia de consumo de sustancias a lo largo de su vida, así como en los últimos 3 meses.Recuerde que estas sustancias pueden ser fumadas, ingeridas, aspiradas, inhaladas, inyectadas o tomadas en forma de pastillas o pildoras.';
        $form->notes = 'Una vez realizada la introducción del formato mostrar tarjeta de drogas.';
        $form->save();

        $form = new forms;
        $form->id = '981af8d3-ab8c-4feb-855d-77fbfe0a0c36';
        $form->name = 'POSIT';
        $form->prefix = 'PST';
        $form->version = '0.0';
        $form->description = 'Instrumento para la evaluación de problemas propios de la adolecencia';
        $form->save();

        $form = new forms;
        $form->id = '981af8d4-0085-4c16-8bf0-102eb4f4f6b1';
        $form->name = 'OPOC';
        $form->prefix = 'PST';
        $form->version = '0.0';
        $form->description = 'Instrumento para la evaluación de problemas propios de la adolecencia';
        $form->save();

        $form = new forms;
        $form->id = '981af8d4-0183-4b56-80e8-06ec7d1d77ba';
        $form->name = 'CRAFFT';
        $form->prefix = 'CRT';
        $form->version = '0.0';
        $form->description = '';
        $form->save();

        $form = new forms;
        $form->id = '981af8d4-0266-4152-b1a2-32ae8e229d56';
        $form->name = 'IRT - Pacientes';
        $form->prefix = 'IRT';
        $form->version = '0.0';
        $form->description = 'Instrumento de medición de tratamiento.';
        $form->save();
    }
}
