<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categoryDrugs;

class categoryDrugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983313a9-4fb1-4761-8787-eb48584389ae';
        $categoryDrug->code = 'CAT001';
        $categoryDrug->name = 'TABACO';
        $categoryDrug->observation = 'Cigarrillos,Cigarros, Habanos,Tabaco de mascar, Pipa, etc.';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '98331d86-e29f-463b-abb4-c4190e556f4e';
        $categoryDrug->code = 'CAT002';
        $categoryDrug->name = 'BEBIDAS ALCOCHÓLICAS';
        $categoryDrug->observation = 'Cerveza,Vino,Licores destilados,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-8294-413d-b12a-e4324c57bc15';
        $categoryDrug->code = 'CAT003';
        $categoryDrug->name = 'CANNABIS';
        $categoryDrug->observation = 'Marihuana,Hierba,Hashis,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-88e6-41c1-b373-43b3456aee0c';
        $categoryDrug->code = 'CAT004';
        $categoryDrug->name = 'CANNABIS';
        $categoryDrug->observation = 'Marihuana,Hierba,Hashis,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-89a9-44dd-b48e-9cc6bcfcdda0';
        $categoryDrug->code = 'CAT005';
        $categoryDrug->name = 'COCAÍNA';
        $categoryDrug->observation = 'Coca,basuco,crack,paco,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-8a6b-48fd-a409-f7eaf13351f5';
        $categoryDrug->code = 'CAT006';
        $categoryDrug->name = 'ANFETAMINAS U OTRO TIPO DE ESTIMULANTES';
        $categoryDrug->observation = 'Speed,Éxtasis,Píldoras adelgazantes,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-8b55-41ae-a073-22c55ed6cf70';
        $categoryDrug->code = 'CAT007';
        $categoryDrug->name = 'INHALANTES';
        $categoryDrug->observation = 'Pegantes,colas,gasolina,solventes,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-8c33-4035-b312-54d055267cbe';
        $categoryDrug->code = 'CAT008';
        $categoryDrug->name = 'TRANQUILIZANTES O PASTILLAS PARA DORMIR';
        $categoryDrug->observation = 'Vlium,Diazepam,Trankimazin,Alprazolam,Xanax,Orfidal,Lorazepam,Rohipnol,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-8cee-4e5f-a429-20c84573c45f';
        $categoryDrug->code = 'CAT009';
        $categoryDrug->name = 'ALUCINÓGENOS';
        $categoryDrug->observation = 'LSD,ácidos,hongos,mezcalina,ketamina,PCP,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-8d99-40d3-b4c0-7f68ff81fd59';
        $categoryDrug->code = 'CAT010';
        $categoryDrug->name = 'OPIÁCEOS';
        $categoryDrug->observation = 'heroína,metadona,codeína,morfina,dolantina/petidina,etc';
        $categoryDrug->save();

        $categoryDrug = new categoryDrugs();
        $categoryDrug->id = '983340da-8e4a-4bf4-8a54-a10c0c1f8a35';
        $categoryDrug->code = 'CAT011';
        $categoryDrug->name = 'LUDOPATÍA';
        $categoryDrug->observation = 'cacinos,tragaperras,blackjack,juegos video,etc';
        $categoryDrug->save();
    }
}
