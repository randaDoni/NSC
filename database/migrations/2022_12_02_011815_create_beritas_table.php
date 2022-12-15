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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('id_news')->unique();
            $table->string('judul')->nullable();
            $table->string('kategoriBeasiswa')->nullable();
            $table->string('region')->nullable();
            $table->date('tanggalPembukaan')->nullable();
            $table->date('tanggalPenutupan')->nullable();
            $table->string('gambar')->nullable();
            $table->string('tingkatKompetisi')->nullable();
            $table->string('linkPendaftaran')->nullable();
            $table->string('tanggalPengumuman')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('jenisBeasiswa')->nullable();
            $table->integer('id')->unsigned();
            $table->timestamps();
            $table->string('tanggal')->nullable()->nullable();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->string("jenisBerita");
            $table->string('approve')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
};
