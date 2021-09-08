<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayaran')->length(20);
            $table->string('jenis_bayaran')->length(20);
            $table->string('nominal_bayaran')->length(20);
            $table->string('tahun_ajaran_id')->length(20);
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
        Schema::dropIfExists('setting_pembayarans');
    }
}
