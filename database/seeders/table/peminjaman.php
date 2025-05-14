<?php

namespace Database\Seeders\table;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class peminjaman extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peminjaman')->insert([
            'pic' => 'John Doe',
            'nama' => 'John Doe',
            'spt' => 'file.pdf',
            'barang' => 'Alat Monitoring',
            'kondisi_barang' => 'Rusak Ringan',
            'tanggal' => '2024-03-18',
        ]);
    }
}
