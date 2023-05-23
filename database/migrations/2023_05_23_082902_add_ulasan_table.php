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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->integer('rating')->nullable();
            $table->string('komentar')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_produk')->nullable();
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_produk')->references('id')->on('produk');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
