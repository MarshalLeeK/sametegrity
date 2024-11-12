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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description');
            $table->string('file')->nullable();
            $table->string('published_by')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
            $table->string('route')->nullable();
            $table->boolean('talento_humano');
            $table->boolean('administracion');
            $table->boolean('nomina');
            $table->boolean('psiquiatria');
            $table->boolean('sistemas');
            $table->boolean('medicos');
            $table->boolean('macroMisional')->nullable();;
            $table->boolean('macroApoyo')->nullable();;
            $table->boolean('macroEstrategico')->nullable();;
            $table->boolean('macroEvaluacion')->nullable();;


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
