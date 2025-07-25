<x-layouts.user.app>

<div>
    <!-- Hero Section -->
    <header class="relative h-auto lg:h-screen text-white overflow-hidden">
        <!-- Background Image -->
        <img 
            src="{{ asset('images/landing-hero.png') }}" 
            alt="Alun-Alun Contong" 
            class="absolute inset-0 w-full h-auto lg:h-full object-cover z-0" />
        <div class="absolute inset-0 bg-black opacity-70 z-10"></div>

        <!-- Navbar -->
        <div class="relative z-20 flex justify-between items-center px-8 pt-6">
            <div class="text-white text-lg font-semibold">Gambar logo?</div>
            <nav class="space-x-6 text-white text-sm font-medium">
                <a href="/" class="hover:underline">Home</a>
                <a href="{{ route('user.produk') }}" class="hover:underline">List Product</a>
                <a href="#umkm" class="hover:underline">List UMKM</a>
                <a href="{{ route('user.aboutus') }}" class="hover:underline">About Us</a>
            </nav>
        </div>

        <!-- Hero Content -->
        <div class="px-6 md:px-16 py-10 relative z-20 container mx-auto px-8 mt-32">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-4">
                Sekilas Tentang<br>
                Alun–Alun Contong
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mb-6 text-gray-200">
                Kenali pesona khas dari kelurahan Alun–Alun Contong — pusat kreativitas, semangat warga, dan rumah bagi pelaku UMKM lokal yang inspiratif.
            </p>
            <a href="#umkm" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded shadow">
                Lihat UMKM Lokal
            </a>

            <!-- Statistik -->
            <div class="flex flex-wrap gap-10 text-white mt-12">
                <div class="text-center">
                    <div class="text-2xl font-bold">20+</div>
                    <div class="text-sm">UMKM Lokal</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold">6+</div>
                    <div class="text-sm">RW</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold">1,000+</div>
                    <div class="text-sm">Warga</div>
                </div>
            </div>
        </div>
    </header>


    <!-- Tentang -->
    <section class="px-6 md:px-16 py-10 bg-white" id="tentang">
        <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-10">
            Tentang Kelurahan Alun–Alun Contong
        </h2>

        <div class="flex flex-col md:flex-row items-center gap-6">
            <!-- Peta -->
            <div class="w-full md:w-2/3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.4225436443451!2d112.73555014135945!3d-7.250295659229502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f941a74bee63%3A0xebe929e460f182fb!2sKANTOR%20KELURAHAN%20ALUN%20ALUN%20CONTONG!5e0!3m2!1sid!2sid!4v1753344857366!5m2!1sid!2sid"
                width="100%"
                height="300"
                allowfullscreen=""
                loading="lazy"
                style="border:0;"
                class="rounded-xl shadow-md w-full"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            </div>

            <!-- Deskripsi -->
            <div class="w-full md:w-1/3">
            <p class="text-gray-800 leading-relaxed text-justify text-base md:text-lg">
                Alun–Alun Contong terletak di jantung Kota Surabaya. Kelurahan ini dikenal dengan kekompakan warganya, keberagaman budaya, serta geliat ekonomi mikro yang tumbuh pesat dari semangat warga.
            </p>
            </div>
        </div>
    </section>


    <!-- UMKM Lokal -->
    <section class="bg-blue-100 py-10 px-6 md:px-16 mb-4" id="umkm">
        <div class="flex items-center justify-between mb-4 flex-wrap gap-4">
            <div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-2">UMKM Lokal Andalan Kami</h2>
                <p class="text-gray-700 max-w-2xl">
                    Berikut beberapa UMKM pilihan yang telah menjadi kebanggaan warga Alun-Alun Contong.
                </p>
            </div>
            <a href="{{ route('user.umkm') }}"
            class="bg-blue-500 text-white px-5 py-2 rounded-full hover:bg-blue-600 transition text-sm font-medium">
            Jelajahi Semua UMKM
            </a>
        </div>

        <div class="flex flex-wrap gap-10">
            @foreach ($umkmUnggulan as $umkm)
                <x-umkm.umkm-card :umkm="$umkm" />
            @endforeach
        </div>
    </section>

    <!-- Ajakan Usaha -->
    <section class="bg-white text-left py-10 px-6 md:px-16 mb-4">
        <div class="container mx-auto">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-4">Punya Usaha di Alun–Alun Contong?</h2>
            <p class="mb-4">Yuk tampilkan usahamu di website ini! Gratis dan terbuka untuk semua warga yang memiliki usaha kecil di wilayah Alun-Alun Contong.</p>
            <a href="#" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800">Hubungi Admin</a>
        </div>
    </section>

    <!-- Galeri -->
    <section class="py-10 px-6 md:px-16 mb-4 container mx-auto">
        <h2 class="text-2xl md:text-3xl font-extrabold mb-4">Galeri Kegiatan Warga</h2>
        <div class="flex justify-between items-center gap-4">
            @for ($i = 0; $i < 4; $i++)
                <img src="https://via.placeholder.com/300x200" class="rounded shadow">
            @endfor
        </div>
    </section>

    <!-- Footer -->
      @include('components.default.footer')
</div>

</x-layouts.user.app>
