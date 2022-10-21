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
            $table->uuid('fk_patient');
            $table->uuid('fk_eps');
            $table->uuid('fk_epstype');
            $table->uuid('fk_user');
            $table->uuid('fk_useraplication');
            $table->uuid('participate')->default(0);
            $table->uuid('presential')->default(0);
            $table->uuid('fk_auxuser');
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
