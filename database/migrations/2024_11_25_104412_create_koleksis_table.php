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
    Schema::create('koleksis', function (Blueprint $table) {
        $table->id('koleksi_id');
        $table->unsignedBigInteger('admin_id');
        $table->string('judul');
        $table->text('deskripsi');
        $table->string('gambar');
        $table->string('kategori');
        $table->timestamps();

        $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksis');
    }
};