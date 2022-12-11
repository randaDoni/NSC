<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetisis', function (Blueprint $table) {
            $table->id('id_kompetisi')->unique();
            $table->string('judul');
            $table->string('tingkatKompetisi');
            $table->string('PembukaanPendaftaran');
            $table->string('PenutupanPendaftaran');
            $table->string('tanggalPengumuman');
            $table->string('gambar');
            $table->string('linkPendaftaran');
            $table->string('deskripsi');
            $table->string('tanggal')->nullable();
            $table->integer('id')->unsigned();
            $table->timestamps();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompetisis');
    }
};
