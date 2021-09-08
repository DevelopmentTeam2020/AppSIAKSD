<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawab_soals', function (Blueprint $table) {
            $table->id();
            $table->integer('soal_id')->length(10);
            $table->integer('user_id')->length(10);
            $table->longText('jawab_soal')->nullable();
            $table->string('file_jawab_soal')->length(50)->nullable();
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
        Schema::dropIfExists('jawab_soals');
    }
}
