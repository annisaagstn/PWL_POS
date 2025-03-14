<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        // Matikan sementara foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Hapus data lama sebelum mengisi yang baru
        DB::table('t_penjualan')->truncate();

        // Masukkan data baru
        DB::table('t_penjualan')->insert([
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Budi Santoso', 'penjualan_kode' => 'PJ01', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Siti Aminah', 'penjualan_kode' => 'PJ02', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Rudi Hartono', 'penjualan_kode' => 'PJ03', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Dewi Lestari', 'penjualan_kode' => 'PJ04', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Adi Saputra', 'penjualan_kode' => 'PJ05', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Sari Dewanti', 'penjualan_kode' => 'PJ06', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Joko Supriyadi', 'penjualan_kode' => 'PJ07', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Anita Purnama', 'penjualan_kode' => 'PJ08', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Bagus Prasetyo', 'penjualan_kode' => 'PJ09', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Maya Anindita', 'penjualan_kode' => 'PJ10', 'penjualan_tanggal' => '2025-03-03 04:19:38'],
        ]);

        // Aktifkan kembali foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
