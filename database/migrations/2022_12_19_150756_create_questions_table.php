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
        Schema::create('questions', function (Blueprint $table) {

            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
            $table->uuid('id')->primary()->unique();
            $table->string('question_name', 20)->nullable();
            $table->text('description');
            $table->text('notes')->nullable();
            $table->boolean('open')->default(1);
            $table->boolean('unique_answer')->default(1);
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
        Schema::dropIfExists('questions');
    }
};
