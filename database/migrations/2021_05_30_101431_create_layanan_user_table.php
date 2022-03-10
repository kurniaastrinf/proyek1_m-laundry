<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_layanan');
            $table->string('status');
            $table->dateTime('tgl_pemesanan');
            $table->double('berat_orderan');
            $table->double('harga');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_layanan')->references('id')->on('layanan');
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
        Schema::dropIfExists('layanan_user');
    }
}
