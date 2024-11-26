<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pesanans', function (Blueprint $table) {
        $table->id('pesanan_id');
        $table->unsignedBigInteger('metode_pembayaran_id');
        $table->string('email');
        $table->string('nama_pelanggan');
        $table->string('nomor_hp');
        $table->date('tanggal_berkunjung');
        $table->integer('jumlah_total');
        $table->timestamps();

        $table->foreign('metode_pembayaran_id')->references('metode_pembayaran_id')->on('metode_pembayarans')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
