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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang')->unique();
            $table->foreignId('pemasok_id')->constrained(
                table:'pemasoks', indexName:'id_pemasok'
            );
            $table->foreignId('kategori_id')->constrained(
                table:'kategoris', indexName:'id_kategori'
            );
            // $table->foreign('id_kategori')->references('id_kategori')->on('kategoris')->constrained();
            $table->string('nama_barang');
            $table->integer('stok_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
