<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_ujians', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->length(10);
            $table->integer('ujian_id')->length(10);
            $table->string('status_ujian')->length(10);
            $table->string('waktu')->length(10);
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
        Schema::dropIfExists('status_ujians');
    }
}
