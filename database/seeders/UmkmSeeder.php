<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\Umkm;


class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        Umkm::create([
    'nama' => 'Toko Kue Lestari',
    'deskripsi' => 'Menjual aneka kue basah dan kering rumahan',
    'alamat' => 'Jl. Merdeka No. 123, Jakarta',
    'nomor_whatsapp' => '081234567890',
    'kategori_id' => 1, // ID dari Kategori "Kuliner"
    'foto' => null
]);

Umkm::create([
    'nama' => 'Kerajinan Kayu Abadi',
    'deskripsi' => 'Spesialis furniture dari kayu jati',
    'alamat' => 'Jl. Raya Solo No. 45, Surakarta',
    'nomor_whatsapp' => '089876543210',
    'kategori_id' => 2, // ID dari Kategori "Kerajinan"
    'foto' => null
]);
    }
}
