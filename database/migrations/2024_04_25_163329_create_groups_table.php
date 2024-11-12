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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('idProfessional');
            $table->string('nameProfessional'); 
            $table->string('outcome');  //Grupo
            $table->string('outpatientGroup'); //Grupo ambulatorio
            $table->integer('campus');  //Localizacion,Clinica
            $table->string('lounge'); //Auditorio,Sala
            $table->date('date'); //fecha asignada para el grupo
            $table->time('time'); //Hora asignada al grupo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
