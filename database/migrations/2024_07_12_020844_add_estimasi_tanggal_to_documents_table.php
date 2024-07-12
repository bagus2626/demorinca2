<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEstimasiTanggalToDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->date('tanggal_estimasi')->after('tanggal')->nullable();
            $table->date('tanggal_selesai')->after('tanggal_estimasi')->nullable();
            $table->enum('status', ['Mulai', 'Rencana', 'Selesai'])->default('Mulai')->after('nama_pemohon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            //
        });
    }
}
