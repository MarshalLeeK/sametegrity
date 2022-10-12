<?php

namespace Database\Seeders;

use App\Models\Patients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 70221359 ;
        $patient->name = 'CESAR AUGUSTO';
        $patient->lastname = 'ARDILA RIVERA';
        $patient->age = 40;
        $patient->gender = 1;
        $patient->phone = '3212590504';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 19319501 ;
        $patient->name = 'MARIN DANNY';
        $patient->lastname = 'ARISTIZABAL';
        $patient->age = 22;
        $patient->gender = 1;
        $patient->phone = '3146373475';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1042766807 ;
        $patient->name = 'DIEGO ANDRES';
        $patient->lastname = 'CALLE AGUIRRE';
        $patient->age = 33;
        $patient->gender = 1;
        $patient->phone = '3127120552';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1000569356 ;
        $patient->name = 'JUAN PABLO';
        $patient->lastname = 'CANO ALVAREZ';
        $patient->age = 40;
        $patient->gender = 1;
        $patient->phone = '3004508843';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1000399592 ;
        $patient->name = 'JUAN FELIPE';
        $patient->lastname = 'CORTES GIL';
        $patient->age = 21;
        $patient->gender = 1;
        $patient->phone = '3104338169';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 18012103 ;
        $patient->name = 'JUAN GABRIEL';
        $patient->lastname = 'GOMEZ GOMEZ';
        $patient->age = 22;
        $patient->gender = 1;
        $patient->phone = '5045845';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1128436397 ;
        $patient->name = 'JAIME ALBERTO';
        $patient->lastname = 'GONZALEZ AREIZA';
        $patient->age = 31;
        $patient->gender = 1;
        $patient->phone = '3107199536';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1216722446 ;
        $patient->name = 'SILVIO';
        $patient->lastname = 'IBARGUEN GUEVARA';
        $patient->age = 25;
        $patient->gender = 1;
        $patient->phone = '4412615';
        $patient->save();

        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1039624642 ;
        $patient->name = 'JOSE DANIEL';
        $patient->lastname = 'MORALES VASQUEZ';
        $patient->age = 27;
        $patient->gender = 1;
        $patient->phone = '3122836388';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 71225232 ;
        $patient->name = 'HERNAN DE JESUS';
        $patient->lastname = 'MURIEL RESTREPO';
        $patient->age = 41;
        $patient->gender = 1;
        $patient->phone = '2093511';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1017214396 ;
        $patient->name = 'ANGEL DAVID';
        $patient->lastname = 'RAMIREZ PATERNINA';
        $patient->age = 28;
        $patient->gender = 1;
        $patient->phone = '3113691703';
        $patient->save();

        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 98584888 ;
        $patient->name = 'GABRIEL JAIME';
        $patient->lastname = 'RIVERA RAMIREZ';
        $patient->age = 51;
        $patient->gender = 1;
        $patient->phone = '3004242';
        $patient->save();

        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1025642098 ;
        $patient->name = 'ESTEBAN';
        $patient->lastname = 'ROMAN CARDONA';
        $patient->age = 23;
        $patient->gender = 1;
        $patient->phone = '3218784534';
        $patient->save();

        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1037609867 ;
        $patient->name = 'SAMUEL';
        $patient->lastname = 'SALCEDO HINCAPIE';
        $patient->age = 31;
        $patient->gender = 1;
        $patient->phone = '3005329795';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1018234067 ;
        $patient->name = 'DANIEL FELIPE';
        $patient->lastname = 'SANTANA OQUENDO';
        $patient->age = 16;
        $patient->gender = 1;
        $patient->phone = 'No';
        $patient->save();

        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1040359589 ;
        $patient->name = 'JUAN ANDRES';
        $patient->lastname = 'SUAREZ SEPULVEDA';
        $patient->age = 33;
        $patient->gender = 1;
        $patient->phone = '3218062977';
        $patient->save();

        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1017257493 ;
        $patient->name = 'JEFFERSON';
        $patient->lastname = 'TAMAYO JARAMILLO';
        $patient->age = 24;
        $patient->gender = 1;
        $patient->phone = '3005130309';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 79967218 ;
        $patient->name = 'ALEJANDRO';
        $patient->lastname = 'URIBE DIAZ';
        $patient->age = 44;
        $patient->gender = 1;
        $patient->phone = '3146677321';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 15345009 ;
        $patient->name = 'FRANCISCO JAVIER';
        $patient->lastname = 'VASQUEZ VASQUEZ';
        $patient->age = 72;
        $patient->gender = 1;
        $patient->phone = '2067166';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 70561571 ;
        $patient->name = 'CARLOS ENRIQUE';
        $patient->lastname = 'VELASCO GALEANO';
        $patient->age = 58;
        $patient->gender = 1;
        $patient->phone = '3016230722';
        $patient->save();
        
        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 8459743 ;
        $patient->name = 'DIONISIO DE JESUS';
        $patient->lastname = 'VIANA GOMEZ';
        $patient->age = 59;
        $patient->gender = 1;
        $patient->phone = '6046008108';
        $patient->save();

        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 1216722595 ;
        $patient->name = 'JUAN ESTEBAN';
        $patient->lastname = 'ZAPATA CARDONA';
        $patient->age = 25;
        $patient->gender = 1;
        $patient->phone = '2207304';
        $patient->save();

        $uuidgen = Str::uuid();
        $patient = new Patients();
        $patient->kp_uuid = $uuidgen;
        $patient->dni = 98522684 ;
        $patient->name = 'VICTOR HUGO';
        $patient->lastname = 'ZULETA JIMENEZ';
        $patient->age = 54;
        $patient->gender = 1;
        $patient->phone = '2770295';
        $patient->save();

    }
}
