<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ujian')->length(20);
            $table->integer('jadwal_id')->length(10);
            $table->string('status_ujian')->length(10);
            $table->date('tanggal_ujian');
            $table->time('jam_mulai_ujian');
            $table->time('jam_selesai_ujian');
            $table->string('waktu_ujian')->length(5);
            $table->integer('jumlah_soal')->length(3);
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
        Schema::dropIfExists('ujians');
    }
}
