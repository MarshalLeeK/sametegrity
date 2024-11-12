<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('name');
            $table->string('lastname');
            $table->string('slug')->nullable();
            $table->string('privilegeSet');
            $table->string('documenttype');
            $table->integer('gender');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->string('username')->nullable();


        });

       // Establecer el valor predeterminado después de crear la tabla
       //$nombre_completo= DB::statement('ALTER TABLE users ADD COLUMN slug VARCHAR(255) GENERATED ALWAYS AS (CONCAT(name, " ", lastname)) STORED');
    
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
