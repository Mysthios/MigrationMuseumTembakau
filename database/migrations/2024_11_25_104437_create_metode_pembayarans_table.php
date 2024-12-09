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
    Schema::create('metode_pembayarans', function (Blueprint $table) {
        $table->id('metode_pembayaran_id');
        $table->unsignedBigInteger('admin_id');
        $table->string('nama_metode');
        $table->string('nomor_akun');
        $table->string('nama_bank');
        $table->timestamps();

        $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metode_pembayarans');
    }
};
