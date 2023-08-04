<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor')->nullable()->index();
            $table->string('nama_pelanggan')->nullable();
            $table->string('hp_pelanggan')->nullable();
            $table->string('email_pelanggan')->nullable();
            $table->foreignId('tiket_id')->nullable();
            $table->double('harga')->nullable();
            $table->integer('kuantiti')->nullable();
            $table->foreignId('bank_id')->nullable();
            $table->double('total')->nullable();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
