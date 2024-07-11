<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_documents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_document');
            $table->date('tanggal');
            $table->enum('status', ['Mulai', 'Rencana', 'Selesai'])->default('Mulai');

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
        Schema::dropIfExists('log_documents');
    }
}
