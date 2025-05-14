<?php

namespace Database\Seeders\table;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            'nama_barang' => 'Alat Monitoring',
            'merk_barang' => 'Merk A',
            'jenis_barang' => 'Monitoring',
            'nup' => '123456',
            'tgl_awal' => '2024-04-02',
            'tgl_dipinjam' => '2024-04-02',
            'kondisi_barang' => 'Rusak Ringan',
        ]);
    }
}
