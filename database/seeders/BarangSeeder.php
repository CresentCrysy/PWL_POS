<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori 1 - Elektronik (5 barang)
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Televisi LED 32 Inch',
                'harga_beli' => 2500000,
                'harga_jual' => 2850000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Kulkas 2 Pintu',
                'harga_beli' => 3200000,
                'harga_jual' => 3650000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Mesin Cuci Front Loading',
                'harga_beli' => 3800000,
                'harga_jual' => 4250000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'AC Split 1 PK',
                'harga_beli' => 2900000,
                'harga_jual' => 3350000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Blender 3in1',
                'harga_beli' => 450000,
                'harga_jual' => 575000,
            ],
            
            // Kategori 2 - Furniture (5 barang)
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Meja Belajar Minimalis',
                'harga_beli' => 750000,
                'harga_jual' => 950000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Kursi Kantor Ergonomis',
                'harga_beli' => 850000,
                'harga_jual' => 1100000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Lemari Pakaian 3 Pintu',
                'harga_beli' => 2100000,
                'harga_jual' => 2600000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Rak Buku 5 Susun',
                'harga_beli' => 650000,
                'harga_jual' => 825000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 2,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Sofa Tamu 3 Seater',
                'harga_beli' => 2800000,
                'harga_jual' => 3450000,
            ],
            
            // Kategori 3 - Pakaian (5 barang)
            [
                'barang_id' => 11,
                'kategori_id' => 3,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Kemeja Pria Lengan Panjang',
                'harga_beli' => 150000,
                'harga_jual' => 225000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Celana Jeans Pria',
                'harga_beli' => 200000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Dress Wanita',
                'harga_beli' => 175000,
                'harga_jual' => 275000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 3,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Jaket Hoodie',
                'harga_beli' => 185000,
                'harga_jual' => 285000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Sepatu Sneakers',
                'harga_beli' => 250000,
                'harga_jual' => 375000,
            ],
        ];
        
        DB::table('m_barang')->insert($data);
    }
}