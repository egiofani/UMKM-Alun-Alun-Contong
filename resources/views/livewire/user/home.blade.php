<div>
<x-layouts.user.app>
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-[500px]" style="background-image: url('/storage/bg-placeholder.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center px-4 text-center">
            <div class="text-white max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">Sekilas Tentang <br> Alun–Alun Contong</h1>
                <p class="mt-4 text-lg">Kenali pesona khas dari Kelurahan Alun–Alun Contong. Pusat kreativitas, semangat warga, dan rumah bagi pelaku UMKM lokal yang inspiratif.</p>
                <div class="mt-6 flex justify-center space-x-6">
                    <div>
                        <div class="text-2xl font-bold">20+</div>
                        <div class="text-sm">UMKM Lokal</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold">6+</div>
                        <div class="text-sm">Kategori</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold">1,000+</div>
                        <div class="text-sm">Pengunjung</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tentang Kelurahan --}}
    <section class="py-12 bg-white max-w-7xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">Tentang Kelurahan Alun–Alun Contong</h2>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="w-full md:w-1/2">
                <img src="https://via.placeholder.com/600x400?text=Peta" class="rounded-lg w-full" alt="Peta">
            </div>
            <div class="w-full md:w-1/2">
                <p class="text-justify">Alun–Alun Contong terletak di jantung Kota Surabaya. Kelurahan ini dikenal dengan kekompakan warganya, keberagaman budaya, serta geliat ekonomi mikro yang tumbuh pesat dari semangat warga.</p>
            </div>
        </div>
    </section>

    {{-- UMKM Unggulan --}}
    <section class="py-12 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">UMKM Lokal Andalan Kami</h2>
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Jelajahi Semua UMKM</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($umkmUnggulan as $umkm)
                    <x-umkm.umkm-card 
                        :nama="$umkm->nama" 
                        :kategori="$umkm->kategori->nama ?? 'Tanpa Kategori'" 
                    />
                @endforeach
            </div>
        </div>
    </section>

    {{-- Ajakan Promosi --}}
    <section class="py-12 bg-white max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-xl font-bold mb-2">Punya Usaha di Alun–Alun Contong?</h2>
        <p class="mb-4">Yuk, tampilkan usahamu di website ini! Gratis dan terbuka untuk semua warga yang memiliki usaha aktif di wilayah Alun–Alun Contong.</p>
        <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Hubungi Admin</a>
    </section>

    {{-- Galeri Warga --}}
    <section class="py-12 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-center">Galeri Kegiatan Warga</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <img src="https://via.placeholder.com/400x250?text=Kegiatan+1" class="rounded-lg w-full">
                <img src="https://via.placeholder.com/400x250?text=Kegiatan+2" class="rounded-lg w-full">
                <img src="https://via.placeholder.com/400x250?text=Kegiatan+3" class="rounded-lg w-full">
            </div>
        </div>
    </section>
</x-layouts.user.app>
</div>
