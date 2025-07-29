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
    'nama' => 'UMKM Barokah',
    'deskripsi' => 'UMKM Barokah hadir untuk menghadirkan cita rasa segar dan nikmat dengan aneka pilihan makanan khas rumahan. Kami menyediakan nasi pecel dengan bumbu kacang yang gurih, salad buah sehat dan menyegarkan, sop buah dengan rasa manis alami, serta rujak gobet yang pedas-manis menggugah selera.
Dengan bahan-bahan segar dan olahan higienis, UMKM Barokah berkomitmen memberikan hidangan berkualitas untuk menemani setiap momen Anda, baik sebagai menu harian, sajian keluarga, maupun hidangan acara spesial.',
    'alamat' => 'Jln. Kawatan VI No. 15',
    'rw'=> '6',
    'nomor_whatsapp' => '081553999093',
    'kategori_id' => 1, // ID dari Kategori "Kuliner"
    'foto' => null
    ]);

    Umkm::create([
        'nama' => 'UMKM Aulia',
        'deskripsi' => 'UMKM Aulia menghadirkan cita rasa jajanan tradisional yang selalu digemari. Kami menyediakan pastel dengan kulit renyah dan isian gurih, serta kue lumpur lembut manis yang cocok dinikmati bersama keluarga maupun sebagai suguhan di berbagai acara.
        Dengan bahan segar dan olahan yang higienis, UMKM Aulia berkomitmen memberikan camilan berkualitas yang nikmat dan memanjakan lidah setiap pelanggan.',
        'alamat' => 'Jln. Praban Wetan Gg. III',
        'rw'=> '4',
        'nomor_whatsapp' => '083856762662',
        'kategori_id' => 1, // ID dari Kategori "Kerajinan"
        'foto' => null
    ]);
    Umkm::create([
        'nama' => 'Dapur Ibu Harith',
        'deskripsi' => 'Dapur Ibu Harith menyajikan berbagai macam camilan lezat dan hidangan nasi dengan cita rasa rumahan yang autentik. Setiap menu diolah dari bahan-bahan segar dengan resep khas, sehingga menghasilkan rasa yang nikmat, mengenyangkan, dan cocok untuk segala suasana.
        Dengan komitmen menjaga kualitas dan higienitas, Dapur Ibu Harith siap menjadi pilihan terbaik untuk teman santai, makan siang, hingga sajian acara spesial Anda.',
        'alamat' => 'Jln. Carikan Sambongan 4 No. 10',
        'rw'=> '2',
        'nomor_whatsapp' => '081358860676',
        'kategori_id' => 1, // ID dari Kategori "Kerajinan"
        'foto' => null
    ]);
    Umkm::create([
        'nama' => 'UMKM Ketan Duren',
        'deskripsi' => 'UMKM Ketan Duren menghadirkan sajian spesial ketan duren dengan perpaduan ketan pulen dan durian segar yang manis legit. Cocok dinikmati sebagai pencuci mulut maupun camilan istimewa, Ketan Duren dibuat dari bahan berkualitas dan diolah secara higienis untuk memberikan rasa terbaik bagi pelanggan.',
        'alamat' => 'Jln. Bubutan Gg. 6 No. 18',
        'rw'=> '6',
        'nomor_whatsapp' => '083849041890',
        'kategori_id' => 1, // ID dari Kategori "Kerajinan"
        'foto' => null
    ]);
    }
}
