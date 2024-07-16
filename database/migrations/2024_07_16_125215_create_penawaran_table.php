<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenawaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawaran', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->string('nama_pemohon');
            $table->string('nama_perusahaan')->nullable();
            $table->string('nomor_handphone');
            $table->string('email')->nullable();
            $table->string('luas_area')->nullable();
            $table->string('lokasi_perusahaan')->nullable();
            $table->longText('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penawaran');
    }
}
