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
    Schema::create('acaras', function (Blueprint $table) {
        $table->id('acara_id');
        $table->unsignedBigInteger('admin_id');
        $table->string('nama_acara');
        $table->date('tanggal_mulai_acara');
        $table->date('tanggal_selesai_acara');
        $table->text('deskripsi');
        $table->string('status');
        $table->string('gambar_banner');
        $table->timestamps();

        $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acaras');
    }
};
