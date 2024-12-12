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
    Schema::create('program_donasis', function (Blueprint $table) {
        $table->id('program_id');
        $table->unsignedBigInteger('admin_id');
        $table->string('judul');
        $table->text('deskripsi');
        $table->integer('jumlah_target');
        $table->integer('jumlah_sekarang')->default(0);
        $table->date('tanggal_mulai');
        $table->date('tanggal_selesai');
        $table->string('status');
        $table->string('gambar');
        $table->timestamps();

        $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_donasis');
    }
};
