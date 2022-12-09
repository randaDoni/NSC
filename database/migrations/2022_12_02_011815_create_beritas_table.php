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
            $table->string('judul');
            $table->string('kategoriBeasiswa');
            $table->string('region');
            $table->date('tanggalPembukaan');
            $table->date('tanggalPenutupan');
            $table->string('gambar');
            $table->string('linkPendaftaran');
            $table->string('deskripsi');
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
        Schema::dropIfExists('beritas');
    }
};
