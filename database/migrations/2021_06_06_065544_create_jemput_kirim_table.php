<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJemputKirimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jemput_kirim', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_layanan_user');
            $table->string('metode');
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->date('tanggal');
            $table->time("jam");
            $table->string('status');
            $table->foreign('id_layanan_user')->references('id')->on('layanan_user');
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
        Schema::dropIfExists('jemput_kirim');
    }
}
