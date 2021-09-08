<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawab_ujians', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->length(20);
            $table->integer('soal_ujian_id')->length(20);
            $table->longText('jawab_ujian');
            $table->integer('nilai_ujian')->length(3);
            $table->integer('halaman_ujian')->length(3);
            $table->string('status_ujian')->length(10);
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
        Schema::dropIfExists('jawab_ujians');
    }
}
