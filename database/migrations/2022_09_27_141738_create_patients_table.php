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
            $table->string('dni', 14)->unique();
            $table->string('photo')->nullable();
            $table->smallInteger('documenttype')->nullable();
            $table->string('documentplace',170)->nullable();
            $table->char('name', 50);
            $table->char('lastname', 50);
            $table->boolean('gender')->default(1)->nullable();
            $table->date('borndate')->nullable();
            $table->smallInteger('age')->nullable();
            $table->smallInteger('academiclevel')->nullable();
            $table->string('fkborncountry',170)->nullable();
            $table->string('fkbornstate',170)->nullable();
            $table->string('fkborncity',170)->nullable();
            $table->string('fklivecountry',170)->nullable();
            $table->string('fklivestate',170)->nullable();
            $table->string('fklivecity',170)->nullable();
            $table->smallInteger('civilsate')->nullable();
            $table->string('job')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('email')->nullable();
            $table->string('emailfa')->nullable();
            $table->string('capitado')->nullable();
            $table->string('fkeps',36)->nullable();
            $table->string('epstype',36)->nullable();
            $table->string('contract')->nullable();
            $table->string('epslevel')->nullable();
            $table->smallInteger('legaldocumenttype')->nullable();
            $table->smallInteger('legaldni')->nullable();
            $table->smallInteger('legalname')->nullable();
            $table->smallInteger('kindred')->nullable();
            $table->smallInteger('legalphone')->nullable();
            $table->smallInteger('legaladress')->nullable();
            $table->smallInteger('observation')->nullable();
            $table->boolean('z_xOne')->default(True);
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
        Schema::dropIfExists('patients');
    }
};
