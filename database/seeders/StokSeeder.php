<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_stok')->truncate(); // Hapus data lama sebelum mengisi baru
        
        DB::table('t_stok')->insert([
            ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 50],
            ['stok_id' => 2, 'barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 30],
            ['stok_id' => 3, 'barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 40],
            ['stok_id' => 4, 'barang_id' => 3, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 25],
            ['stok_id' => 5, 'barang_id' => 3, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 60],
            ['stok_id' => 6, 'barang_id' => 4, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 45],
            ['stok_id' => 7, 'barang_id' => 5, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 35],
            ['stok_id' => 8, 'barang_id' => 6, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 20],
            ['stok_id' => 9, 'barang_id' => 7, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 80],
            ['stok_id' => 10, 'barang_id' => 8, 'user_id' => 1, 'stok_tanggal' => '2025-03-01 17:19:29', 'stok_jumlah' => 70],
        ]);
    }
}
