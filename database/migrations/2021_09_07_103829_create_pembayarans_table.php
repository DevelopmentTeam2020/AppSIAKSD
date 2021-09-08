<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->length(25);
            $table->string('transaksi_id')->length(20);
            $table->integer('user_id')->length(20);
            $table->integer('bayaran_id')->length(20);
            $table->string('jenis')->length(20);
            $table->string('keterangan')->length(20);
            $table->string('bulan')->length(20);
            $table->integer('tahun_ajaran_id')->length(3);
            $table->string('nominal_bayar')->length(10);
            $table->string('kembali_bayar')->length(10);
            $table->string('status_bayar')->length(10);
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
        Schema::dropIfExists('pembayarans');
    }
}
