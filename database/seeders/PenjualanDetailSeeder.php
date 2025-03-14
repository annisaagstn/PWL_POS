<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_penjualan_detail')->truncate();
        
        DB::table('t_penjualan_detail')->insert([
            // Penjualan 1
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 6000000, 'jumlah' => 2],
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 60000, 'jumlah' => 3],
            ['penjualan_id' => 1, 'barang_id' => 5, 'harga' => 36000, 'jumlah' => 3],

            // Penjualan 2
            ['penjualan_id' => 2, 'barang_id' => 2, 'harga' => 1200000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 45000, 'jumlah' => 2],
            ['penjualan_id' => 2, 'barang_id' => 8, 'harga' => 2000, 'jumlah' => 5],

            // Penjualan 3
            ['penjualan_id' => 3, 'barang_id' => 4, 'harga' => 130000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 7500, 'jumlah' => 4],
            ['penjualan_id' => 3, 'barang_id' => 10, 'harga' => 6000, 'jumlah' => 2],

            // Penjualan 4
            ['penjualan_id' => 4, 'barang_id' => 2, 'harga' => 1200000, 'jumlah' => 2],
            ['penjualan_id' => 4, 'barang_id' => 3, 'harga' => 36000, 'jumlah' => 2],
            ['penjualan_id' => 4, 'barang_id' => 5, 'harga' => 28000, 'jumlah' => 3],

            // Penjualan 5
            ['penjualan_id' => 5, 'barang_id' => 7, 'harga' => 28000, 'jumlah' => 3],
            ['penjualan_id' => 5, 'barang_id' => 8, 'harga' => 2000, 'jumlah' => 5],
            ['penjualan_id' => 5, 'barang_id' => 4, 'harga' => 130000, 'jumlah' => 1],

            // Penjualan 6
            ['penjualan_id' => 6, 'barang_id' => 6, 'harga' => 45000, 'jumlah' => 2],
            ['penjualan_id' => 6, 'barang_id' => 9, 'harga' => 7500, 'jumlah' => 5],
            ['penjualan_id' => 6, 'barang_id' => 10, 'harga' => 6000, 'jumlah' => 2],

            // Penjualan 7
            ['penjualan_id' => 7, 'barang_id' => 2, 'harga' => 1200000, 'jumlah' => 2],
            ['penjualan_id' => 7, 'barang_id' => 3, 'harga' => 36000, 'jumlah' => 2],
            ['penjualan_id' => 7, 'barang_id' => 5, 'harga' => 28000, 'jumlah' => 3],

            // Penjualan 8
            ['penjualan_id' => 8, 'barang_id' => 7, 'harga' => 28000, 'jumlah' => 3],
            ['penjualan_id' => 8, 'barang_id' => 8, 'harga' => 2000, 'jumlah' => 5],
            ['penjualan_id' => 8, 'barang_id' => 4, 'harga' => 130000, 'jumlah' => 1],

            // Penjualan 9
            ['penjualan_id' => 9, 'barang_id' => 1, 'harga' => 6000000, 'jumlah' => 2],
            ['penjualan_id' => 9, 'barang_id' => 3, 'harga' => 60000, 'jumlah' => 3],
            ['penjualan_id' => 9, 'barang_id' => 5, 'harga' => 36000, 'jumlah' => 3],

            // Penjualan 10
            ['penjualan_id' => 10, 'barang_id' => 2, 'harga' => 1200000, 'jumlah' => 1],
            ['penjualan_id' => 10, 'barang_id' => 6, 'harga' => 45000, 'jumlah' => 2],
            ['penjualan_id' => 10, 'barang_id' => 8, 'harga' => 2000, 'jumlah' => 5],
        ]);
    }
}
