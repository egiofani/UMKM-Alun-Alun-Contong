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
            'nama' => 'Nasi Pecel',
            'deskripsi' => 'Nasi pecel khas rumahan dengan sayur segar dan bumbu kacang gurih pedas yang menggugah selera setiap suapan',
            'harga' => 10000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 1,
            'kategori_id' => 1,
            'nama' => 'Salad Buah',
            'deskripsi' => 'Salad buah segar dengan potongan buah pilihan yang manis alami, dipadukan dengan saus creamy yang lembut, siap menyegarkan harimu kapan saja.',
            'harga' => 15000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 1,
            'kategori_id' => 1,
            'nama' => 'Sop Buah',
            'deskripsi' => 'Sop buah segar dengan isian buah-buahan pilihan berpadu manisnya sirup dan susu, menghadirkan sensasi menyegarkan yang cocok dinikmati di segala suasana.',
            'harga' => 10000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 1,
            'kategori_id' => 1,
            'nama' => 'Rujak Gobet',
            'deskripsi' => 'Rujak gobet segar dengan parutan buah pilihan yang berpadu dengan siraman air gula asam pedas-manis, menghadirkan rasa unik yang menyegarkan dan bikin ketagihan.',
            'harga' => 10000,
            'foto' => null,
        ]);

        Produk::create([
            'umkm_id' => 2,
            'kategori_id' => 1,
            'nama' => 'Kue Lumpur Pandan',
            'deskripsi' => 'Kue lumpur pandan lembut dengan aroma wangi khas pandan dan rasa manis legit, cocok sebagai camilan tradisional yang memanjakan lidah di setiap gigitan.',
            'harga' => 5000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 2,
            'kategori_id' => 1,
            'nama' => 'Pastel Ayam Sayur',
            'deskripsi' => 'Pastel ayam sayur dengan kulit renyah berisi ayam suwir dan sayuran segar berbumbu gurih, menjadi camilan istimewa yang nikmat di setiap gigitan.',
            'harga' => 5000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 3,
            'kategori_id' => 1,
            'nama' => 'Risol Mayo',
            'deskripsi' => 'Risol mayo dengan isi sosis dan telur yang berpadu dengan saus mayonnaise creamy, menghasilkan rasa gurih lezat yang pas dinikmati kapan saja.',
            'harga' => 3000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 3,
            'kategori_id' => 1,
            'nama' => 'Sempol',
            'deskripsi' => 'Sempol gurih dengan tekstur kenyal dan aroma khas, dibalut tepung lalu digoreng garing, cocok jadi camilan hangat yang nikmat disantap dengan saus pedas.',
            'harga' => 1000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 3,
            'kategori_id' => 1,
            'nama' => 'Jasuke',
            'deskripsi' => 'Jasuke (jagung susu keju) manis gurih dengan jagung pipil hangat yang dipadu susu kental manis dan taburan keju melimpah, jadi camilan simpel yang selalu bikin ketagihan.',
            'harga' => 5000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 3,
            'kategori_id' => 1,
            'nama' => 'Sate Usus',
            'deskripsi' => 'Sate usus dengan bumbu gurih khas dan tekstur kenyal yang menggoda, dibakar hingga harum dan nikmat disantap sebagai lauk maupun camilan.',
            'harga' => 2000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 3,
            'kategori_id' => 1,
            'nama' => 'Nasi Ayam Geprek',
            'deskripsi' => 'Nasi ayam geprek dengan ayam goreng renyah yang dibalut sambal pedas menggugah selera, disajikan hangat bersama nasi pulen yang pas untuk santapan kenyang dan nikmat.',
            'harga' => 12000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 3,
            'kategori_id' => 1,
            'nama' => 'Mie Ayam',
            'deskripsi' => 'Mie ayam dengan mie kenyal berpadu ayam berbumbu gurih manis, disajikan hangat bersama kuah kaldu segar yang kaya rasa dan menggugah selera.',
            'harga' => 12000,
            'foto' => null,
        ]);
        Produk::create([
            'umkm_id' => 3,
            'kategori_id' => 1,
            'nama' => 'Nasi Ayam Suwir',
            'deskripsi' => 'Nasi ayam suwir dengan daging ayam lembut berbumbu khas yang gurih pedas, disajikan bersama nasi hangat untuk hidangan sederhana namun penuh cita rasa.',
            'harga' => 12000,
            'foto' => null,
        ]);
    
}
}
