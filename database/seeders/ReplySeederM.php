<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\replies;

class ReplySeederM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reply = new replies();
        $reply->id = '9813169b-50f2-4ccb-987d-5ae20a60f475';
        $reply->name = 'NO';
        $reply->observation = 'Respuesta Negativa.';
        $reply->save();

        $reply = new replies();
        $reply->id = '9813169b-6626-4087-8165-c149d225b4ed';
        $reply->name = 'SI';
        $reply->observation = 'Respuesta Afirmativa.';
        $reply->save();

        $reply = new replies();
        $reply->id = '9813169b-6781-48ff-ae24-d38555acab1a';
        $reply->name = 'NUNCA';
        $reply->observation = 'Negación Total.';
        $reply->save();

        $reply = new replies();
        $reply->id = '9813169b-684f-4075-b467-346b23f6c8c8';
        $reply->name = '1 ó 2 Veces';
        $reply->observation = 'Consumo "Bajo".';
        $reply->save();

        $reply = new replies();
        $reply->id = '9813169b-69a8-41f9-81bf-4adc45c70183';
        $reply->name = 'Mensual';
        $reply->observation = 'Consumo "Medio".';
        $reply->save();

        $reply = new replies();
        $reply->id = '9813169b-6ab6-477d-865e-1841aafc999a';
        $reply->name = 'Semanal';
        $reply->observation = 'Consumo "Alto".';
        $reply->save();

        $reply = new replies();
        $reply->id = '9813169b-6b60-48bd-aa8b-0091ae7bc28e';
        $reply->name = 'Sí, 3 Meses o menos';
        $reply->observation = 'Ha tenido una alerta por un familiar recientemente';
        $reply->save();

        $reply = new replies();
        $reply->id = '9813169b-6c19-4392-894b-ac21444b1af2';
        $reply->name = 'Sí, más de 3 meses';
        $reply->observation = 'Ha tenido una alerta por un familiar hace mas de 3 meses';
        $reply->save();
    }
}
