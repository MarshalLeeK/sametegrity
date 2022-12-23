<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

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
            $table->string('name', 20)->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('description');
            $table->text('notes')->nullable();
            $table->boolean('open')->default(0);
            $table->boolean('unique_answer')->default(1);
            $table->boolean('z_xOne')->default(1);
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
