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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_produk')->nullable();
            $table->unsignedBigInteger('id_keranjang')->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_produk')->references('id')->on('produk');
            $table->foreign('id_keranjag')->references('id')->on('keranjang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema:dropIfExist('transaksi');
    }
};
