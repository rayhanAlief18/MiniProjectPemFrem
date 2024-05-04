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
        Schema::table('barang', function (Blueprint $table) {
            $table->string('kode_satuan')->after('deskripsi_barang'); // Menambah kolom kode_satuan
            $table->foreign('kode_satuan')->references('kode_satuan')->on('satuan'); // Menambah foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->dropForeign(['kode_satuan']); // Menghapus foreign key
            $table->dropColumn('kode_satuan'); // Menghapus kolom kode_satuan
        });
    }
};
