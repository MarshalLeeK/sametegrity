<?php

namespace Database\Seeders;

use App\Models\TypeDocs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDocsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeDoc = new TypeDocs();
        $typeDoc->id = '11';
        $typeDoc->name = 'Registro Civil de nacimiento';
        $typeDoc->abbreviation = 'RC';
        $typeDoc->save();
        
        $typeDoc = new TypeDocs();
        $typeDoc->id = '12';
        $typeDoc->name = 'Tarjeta Identidad';
        $typeDoc->abbreviation = 'TI';
        $typeDoc->save();     

        $typeDoc = new TypeDocs();
        $typeDoc->id = '13';
        $typeDoc->name = 'Cédula de Ciudadanía';
        $typeDoc->abbreviation = 'CC';
        $typeDoc->save();
        
        $typeDoc = new TypeDocs();
        $typeDoc->id = '21';
        $typeDoc->name = 'Tarjeta de extranjería';
        $typeDoc->abbreviation = 'TE';
        $typeDoc->save();
        
        $typeDoc = new TypeDocs();
        $typeDoc->id = '22';
        $typeDoc->name = 'Cédula de extranjería';
        $typeDoc->abbreviation = 'CE';
        $typeDoc->save();
        
        $typeDoc = new TypeDocs();
        $typeDoc->id = '31';
        $typeDoc->name = 'Numero de identificación tributaria';
        $typeDoc->abbreviation = 'NIT';
        $typeDoc->save();

        $typeDoc = new TypeDocs();
        $typeDoc->id = '41';
        $typeDoc->name = 'Pasaporte';
        $typeDoc->abbreviation = 'PP';
        $typeDoc->save();

        $typeDoc = new TypeDocs();
        $typeDoc->id = '43';
        $typeDoc->name = 'No Definido por la DIAN';
        $typeDoc->abbreviation = 'ND';
        $typeDoc->save();

    }
}