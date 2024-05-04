<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'KK01',
                'nama_barang' => 'Kursi Gaming Majapahit',
                'harga_barang' => 'Rp. 500.000',
                'deskripsi_barang' => 'Kursi dengan ukiran hewan mitologi yaitu naga dan grifin menjadikan tampilan sangat gagah',
                'satuan_barang' => 'Kursi dengan ukiran hewan mitologi yaitu naga dan grifin menjadikan tampilan sangat gagah',

            ],
            [
                'kode_barang' => 'KK02',
                'nama_barang' => 'Meja Gaming Majapahit',
                'harga_barang' => 'Rp. 800.000',
                'deskripsi_barang' => 'Alas gaming dengan luas 200km yang memungkinkan anda bergerak leluasa',
                'satuan_barang' => 'Kursi dengan ukiran hewan mitologi yaitu naga dan grifin menjadikan tampilan sangat gagah',

            ],
            [
                'kode_barang' => 'KK03',
                'nama_barang' => 'Zirah Gaming Majapahit',
                'harga_barang' => 'Rp. 200.000',
                'deskripsi_barang' => 'Menonjolkan identitas anda sebagai gamer profesional',                
                'satuan_barang' => 'Kursi dengan ukiran hewan mitologi yaitu naga dan grifin menjadikan tampilan sangat gagah',


            ],
        ]);

    }
}
