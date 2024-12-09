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
    Schema::create('donasis', function (Blueprint $table) {
        $table->id('donasi_id');
        $table->unsignedBigInteger('program_id');
        $table->unsignedBigInteger('metode_pembayaran_id');
        $table->string('nama_donatur');
        $table->string('email');
        $table->integer('jumlah');
        $table->string('status_pembayaran');
        $table->timestamps();

        $table->foreign('program_id')->references('program_id')->on('program_donasis')->onDelete('cascade');
        $table->foreign('metode_pembayaran_id')->references('metode_pembayaran_id')->on('metode_pembayarans')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasis');
    }
};
