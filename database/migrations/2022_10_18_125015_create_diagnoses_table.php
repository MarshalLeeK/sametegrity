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
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->uuid('kp_uuid');
            $table->string('code',10)->unique();
            $table->string('name',255)->nullable();;
            $table->text('description');
            $table->text('observation')->nullable();
            $table->boolean('z_xOne')->default(1);
            $table->string('createdUser',20)->nullable();
            $table->string('updatedUser',20)->nullable();
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
        Schema::dropIfExists('diagnoses');
    }
};
