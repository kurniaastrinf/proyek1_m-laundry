<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_layanan_user');
            $table->double('total_harga');
            $table->string('metode_transaksi');
            $table->dateTime('tgl_transaksi');
            $table->string('status_transaksi');
            $table->text('bukti_transaksi')->nullable();
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
        Schema::dropIfExists('transaksi');
    }
}
