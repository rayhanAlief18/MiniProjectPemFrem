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
        Schema::create('satuan', function (Blueprint $table) {
            $table->string('kode_satuan')->primary();
            $table->string('nama_satuan');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satuan');
        Schema::table('barangs', function (Blueprint $table) {
            $table->string('kode_satuan')->after('deskripsi_barang'); // Menambah kolom kode_satuan
            $table->foreign('kode_satuan')->references('kode_satuan')->on('satuan'); // Menambah foreign key
        });
    }
};
