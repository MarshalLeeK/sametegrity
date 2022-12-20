<?php

namespace Database\Seeders;

use Database\Seeders\factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\questions;

class questionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // questions::factory(5); DEFAUL TEST.

        $id = questions::all()->count() + 1;
        $question = new questions();
        $question->id =  '98053083-c3af-439f-8eaa-e5277dc36b74';
        $question->name = "Pregunta {$id}";
        $question->description = '¿cuáles sustancias han consumido alguna vez a lo largo de la vida?';
        $question->notes = 'Compruebe si todas las respuestas son negativas. Pregunta si tampoco en fiestas o cuando iba al colegio. Si contestó "NO" a todos los items, termine la entrevista. Si contestó "SÍ" a alguno de estos items siga a la pregunta 2';
        $question->save();

        $id += 1;
        $question = new questions();
        $question->id =  '98054676-e215-4fb3-a8b4-91c54b46fe30';
        $question->name = "Pregunta {$id}";
        $question->description = ' ¿con qué frecuencia ha consumido sustancias en los últimos tres meses?';
        $question->notes = 'Si respondío "Nunca" a todos los items de la pregunta 2 salte a la pregunta 6';
        $question->save();

        $id += 1;
        $question = new questions();
        $question->id =  '98054676-e9bf-4b9f-b945-1222da75af59';
        $question->name = "Pregunta {$id}";
        $question->description = '¿con qué frecuencia ha sentido un fuerte deseo o ansias de consumir cada sustancia en los últimos tres meses?';
        $question->notes = '';
        $question->save();

        $id += 1;
        $question = new questions();
        $question->id =  '98054676-eb1b-4c34-883f-f020d73005fb';
        $question->name = "Pregunta {$id}";
        $question->description = 'En los últimos 3 meses ¿con que frecuencia le ha llevado su consumo de consumo de consumir alguna de las siguientes sustancias?';
        $question->notes = '';
        $question->save();

        $id += 1;
        $question = new questions();
        $question->id =  '98054676-ec27-452d-ae3f-f8bda7c2b0a2';
        $question->name = "Pregunta {$id}";
        $question->description = 'En los últimos 3 meses ¿con que frecuencia dejó de hacer lo que se esperaba consumir alguna de las siguientes sustancias?';
        $question->notes = '';
        $question->save();

        $id += 1;
        $question = new questions();
        $question->id =  '98055306-47b7-41ae-a52d-13959064b353';
        $question->name = "Pregunta {$id}";
        $question->description = '¿Algún amigo, familiar o alguien más ha mostrado preocupación por los hábitos de consumo? y ¿qué tan reciente ha sido';
        $question->notes = 'Aplica para todas las sustancias que el paciente ha consumido alguna vez, es decir la pregunta 1';
        $question->save();

        $id += 1;
        $question = new questions();
        $question->id =  '98055306-4db5-4c07-82a5-ea470d3c0fb1';
        $question->name = "Pregunta {$id}";
        $question->description = '¿Ha intentado alguna vez reducir o eliminar el consumo de sustancias y no se ha logrado? y ¿qué tan reciente ha sido?';
        $question->notes = 'Aplica para todas las sustancias que el paciente ha consumido alguna vez, es decir la pregunta 1';
        $question->save();

        $id += 1;
        $question = new questions();
        $question->id =  '98055306-4eb2-4ce4-88db-8a8ad9663d10';
        $question->name = "Pregunta {$id}";
        $question->description = '¿Alguna vez ha consumido alguna droga por vía inyectada? y ¿qué tan reciente ha sido?';
        $question->notes = 'Aplica para todas las sustancias que el paciente ha consumido alguna vez, es decir la pregunta 1';
        $question->save();
    }
}
