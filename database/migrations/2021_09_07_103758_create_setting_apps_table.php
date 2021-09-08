<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_apps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah')->length(20);
            $table->string('logo_sekolah')->length(20);
            $table->longText('alamat_sekolah');
            $table->string('midtrans-key')->nullable();
            $table->string('pendaftaran')->length(10)->nullable();
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
        Schema::dropIfExists('setting_apps');
    }
}
