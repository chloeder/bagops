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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nomor');
            $table->string('slug');
            $table->string('file')->nullable();
            $table->string('keterangan');
            $table->foreignId('status_type')->default(1);
            $table->foreignId('kategori_id');
            $table->date('diterima')->nullable();
            $table->date('terlambat')->nullable();
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
        Schema::dropIfExists('data');
    }
};
