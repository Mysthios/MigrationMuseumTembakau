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
    Schema::create('info_museums', function (Blueprint $table) {
        $table->id('info_id');
        $table->unsignedBigInteger('admin_id');
        $table->string('nama');
        $table->text('deskripsi');
        $table->text('alamat');
        $table->dateTime('jam_operasional');
        $table->string('kontak_phone');
        $table->string('email');
        $table->string('link_map');
        $table->string('link_sosial_media');
        $table->timestamps();

        $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_museums');
    }
};
