<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa')->length(75);
            $table->string('nisn')->length(15);
            $table->string('nis')->length(14);
            $table->integer('kelas_id')->length(3);
            $table->date('tanggal_masuk_sekolah'); 
            $table->integer('usia')->length(3);
            $table->string('jenis_kelamin')->length(2);
            $table->string('status')->length(12);
            $table->string('nama_ayah')->length(75);
            $table->string('pekerjaan_ayah')->length(30);
            $table->string('nama_ibu')->length(75);
            $table->string('pekerjaan_ibu')->length(30);
            $table->text('alamat');
            $table->string('nomor_telepon_orangtua')->length(14);
            $table->string('foto')->length(100);
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
        Schema::dropIfExists('users');
    }
}
