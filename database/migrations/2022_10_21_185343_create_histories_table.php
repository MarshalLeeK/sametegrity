<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->uuid('fk_patient'); /*Paciente*/
            $table->uuid('fk_eps'); 
            $table->uuid('fk_epstype'); //Regimen
            $table->uuid('fk_user'); //Medico
            $table->uuid('fk_useraplication'); // Especialidad del medico
            $table->uuid('participate')->default(0); //Aistencia
            $table->boolean('presential')->default(0); //VirtualPresencial
            $table->boolean('fk_auxuser'); //Medico Auxiliar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};
