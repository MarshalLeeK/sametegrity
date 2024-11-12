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
        Schema::create('headquarters', function (Blueprint $table) {
            $table->id();
            $table->string('nit');
            $table->string('campusName'); 
            $table->string('department');  //Departamento
            $table->string('city'); //Ciudad
            $table->string('neighborhood'); //Barrio 
            $table->string('addres');  //Direccion
            $table->date('date'); //fecha en que se creo la sede
            $table->integer('phoneHeadquarter'); //Telefono de la sede
            $table->string('emailHeadquarter');//Correo de la sede
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headquarters');
    }
};
