<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patient_groups', function (Blueprint $table) {
            $table->id();
            $table->integer('typeDoc');//Tipo de documento
            $table->string('dni');//numero de documento
            $table->date('borndate'); //fecha de nacimiento
            $table->string('name'); //Nombres 
            $table->string('lastname'); //Apellidos
            $table->string('eps');  //EPS
            $table->string('visitorType'); //PACIENTE/ACUDIENTE
            $table->integer('phone'); //Telefono paciente
            $table->string('email');//Correo paciente
            $table->string('group'); //Barrio 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_groups');
    }
};



    
