<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GudangSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('gudangs')->insert([
      [
        'nama_gudang' => 'Gudang Sentral',
        'alamat_gudang' => 'Jl. Merdeka No.1, Jakarta',
        'penanggung_jawab' => 'Andi Wijaya',
        'status_gudang' => 'aktif',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Timur',
        'alamat_gudang' => 'Jl. Kenanga 12, Surabaya',
        'penanggung_jawab' => 'Siti Aminah',
        'status_gudang' => 'aktif',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Barat',
        'alamat_gudang' => 'Kompleks Industri A3, Bandung',
        'penanggung_jawab' => 'Budi Kusuma',
        'status_gudang' => 'dalam perbaikan',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Utama',
        'alamat_gudang' => 'Jl. Pulau Indah 5, Medan',
        'penanggung_jawab' => 'Rina Marlina',
        'status_gudang' => 'nonaktif',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Pelabuhan',
        'alamat_gudang' => 'Area Pelabuhan 2, Belawan',
        'penanggung_jawab' => 'Joko Santoso',
        'status_gudang' => 'aktif',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Kota',
        'alamat_gudang' => 'Pusat Niaga Lt.2, Semarang',
        'penanggung_jawab' => 'Mega Putri',
        'status_gudang' => 'aktif',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Selatan',
        'alamat_gudang' => 'Jl. Bahagia 8, Makassar',
        'penanggung_jawab' => 'Fajar Pratama',
        'status_gudang' => 'dalam perbaikan',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Utara',
        'alamat_gudang' => 'Kav. Industri 9, Batam',
        'penanggung_jawab' => 'Lina Hartati',
        'status_gudang' => 'aktif',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Desa',
        'alamat_gudang' => 'Desa Sukamaju, Bogor',
        'penanggung_jawab' => 'Agus Salim',
        'status_gudang' => 'nonaktif',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama_gudang' => 'Gudang Logistic',
        'alamat_gudang' => 'Jl. Logistik 20, Yogyakarta',
        'penanggung_jawab' => 'Dewi Kartika',
        'status_gudang' => 'aktif',
        'created_at' => now(),
        'updated_at' => now(),
      ]
    ]);
  }
}
