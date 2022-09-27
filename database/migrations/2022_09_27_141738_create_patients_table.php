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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->uuid('kp_uuid');
            $table->foreignUuid('fk_borncity');
            $table->foreignUuid('fk_range', 36);
            $table->foreignUuid('fk_eps', 36);
            $table->string('dni', 12)->unique();
            $table->char('name', 50);
            $table->char('lastname', 50);
            $table->boolean('gender');
            $table->date('borndate');
            $table->smallInteger('age');
            $table->smallInteger('civilsate');
            $table->smallInteger('academiclevel');
            $table->string('occupation');
            $table->string('address');
            $table->string('city');
            $table->string('zone');
            $table->string('country');
            $table->string('phone');
            $table->string('cellphone');
            $table->string('email');
            $table->string('emailfa');
            $table->smallInteger('documenttype');
            $table->string('documentplace', 36);
            $table->boolean('z_xOne')->default(True);
            $table->string('createdUser',20);
            $table->string('updatedUser',20);
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
        Schema::dropIfExists('patients');
    }
};
