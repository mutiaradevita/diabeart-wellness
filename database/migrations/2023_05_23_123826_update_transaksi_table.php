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
        Schema::table('transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_users')->nullable();
            $table->unsignedBigInteger('id_produk')->nullable();
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_produk')->references('id')->on('produk');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['id_users']);
            $table->dropForeign(['id_produk']);
            $table->dropForeign(['id_keranjang']);
        });
    }
};
