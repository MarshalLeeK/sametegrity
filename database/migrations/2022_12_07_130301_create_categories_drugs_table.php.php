<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
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
        //
        Schema::create('categoriesDrugs', function (Blueprint $table) {

            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish2_ci';
            $table->uuid('id')->primary()->unique();
            $table->string('code', 10)->unique();
            $table->string('name', 255)->nullable();
            #Update to text on nextversión = error when insert because entry will be to long
            // $table->string('observation', 255)->nullable();
            $table->text('observation')->nullable();
            $table->boolean('z_xOne')->default(1);
            $table->string('create_us', 60)->nullable();
            $table->string('update_us', 60)->nullable();
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
        Schema::dropIfExists('categoriesDrugs');
    }
};
