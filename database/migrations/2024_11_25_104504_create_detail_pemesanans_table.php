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
    Schema::create('detail_pemesanans', function (Blueprint $table) {
        $table->id('detail_pemesanan_id');
        $table->unsignedBigInteger('pesanan_id');
        $table->unsignedBigInteger('tiket_id');
        $table->integer('kuantitas');
        $table->integer('subtotal');
        $table->timestamps();

        $table->foreign('pesanan_id')->references('pesanan_id')->on('pesanans')->onDelete('cascade');
        $table->foreign('tiket_id')->references('tiket_id')->on('tikets')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pemesanans');
    }
};
