<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => 'SS01',
                'nama_satuan' => 'Unit',

            ],
            [
                'kode_satuan' => 'SS02',
                'nama_satuan' => 'Pieces',
            ],
            
        ]);
    }
}
