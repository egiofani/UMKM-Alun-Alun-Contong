<?php


namespace Database\Seeders;
use App\Models\Kategori;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
        public function run(): void
    {
        Kategori::create(['nama' => 'Kuliner']);
        Kategori::create(['nama' => 'Kerajinan']);
        Kategori::create(['nama' => 'Jasa']);

    }
}

