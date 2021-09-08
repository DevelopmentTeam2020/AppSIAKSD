<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru')->length(75);
            $table->string('nik')->length(20);
            $table->string('nu_ptk')->length(30);
            $table->string('tempat_lahir')->length(30);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('pendidikan')->length(10);
            $table->string('masa_kerja')->length(10);
            $table->string('status_kepegawaian')->length(10);
            $table->string('foto')->length(100);
            $table->string('status')->length(10);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('gurus');
    }
}
