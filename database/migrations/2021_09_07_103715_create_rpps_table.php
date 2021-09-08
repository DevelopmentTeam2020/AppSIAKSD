<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpps', function (Blueprint $table) {
            $table->id();
            $table->integer('guru_id')->length(20);
            $table->string('nama_rpp')->length(20);
            $table->string('keterangan_rpp')->length(100)->nullable();
            $table->string('file_rpp')->length(100);
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
        Schema::dropIfExists('rpps');
    }
}
