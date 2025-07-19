<?php

namespace Database\Seeders;

use App\Models\Produk;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Produk::create([
            'umkm_id' => 1,
            'kategori_id' => 1,
            'nama' => 'Kue Lapis Legit',
            'deskripsi' => 'Kue lapis legit dengan bahan premium',
            'harga' => 75000,
            'foto' => null,
        ]);

        Produk::create([
            'umkm_id' => 2,
            'kategori_id' => 3,
            'nama' => 'Meja Tamu Minimalis',
            'deskripsi' => 'Meja tamu dari kayu jati dengan desain minimalis',
            'harga' => 1250000,
            'foto' => null,
        ]);
    
}
}
