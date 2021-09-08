<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_ujians', function (Blueprint $table) {
            $table->id();
            $table->integer('ujian_id')->length(10);
            $table->string('jenis_soal')->length(10);
            $table->longText('soal_ujian');
            $table->string('audio_ujian')->length(100)->nullable();
            $table->longText('pil_a_ujian');
            $table->longText('pil_b_ujian');
            $table->longText('pil_c_ujian');
            $table->longText('pil_d_ujian');
            $table->longText('pil_e_ujian')->nullable();
            $table->integer('nilai_ujian')->length(3);
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
        Schema::dropIfExists('soal_ujians');
    }
}
