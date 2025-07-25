<x-layouts.user.app>
    <div>
        @include('components.default.navbar')
        <section>
           <div class="w-full mx-auto p-4 flex flex-col items-center justify-center">
                <h1 class="text-2xl md:text-3xl font-extrabold mb-2">{{ $umkmUnggulan->nama }}</h1>
                <img src="{{ $umkmUnggulan->foto }}" alt="Foto UMKM" class="p-16 max-w-4xl h-auto lg:h-full object-cover z-20">
            </div>
        </section>

        <section class="px-6 md:px-16 py-5">
            <h3 class="text-xl md:text-2xl text-gray-900">Tentang {{ $umkmUnggulan->nama }}<h3>
            <p class="mb-4 text-gray-800">{{ $umkmUnggulan->deskripsi }}</p>
        </section>

        <section>
            <div class="py-10 px-6 md:px-16">
                <h3 class="text-xl md:text-2xl text-grey-900">Produk Lainnya</h3>
                <div class="bg-blue-100 py-10 px-6 md:px-16 rounded-xl m-4">
                    <div class="flex space-x-4 overflow-x-auto scrollbar-hide">

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="px-6 md:px-16 py-10">
                <h3 class="text-xl md:text-2xl text-gray-900">Lokasi dan Kontak</h3>

                <!-- Tampilkan Alamat -->
                <div class="py-6">{{ $umkmUnggulan->lokasi }}</div>

                <!-- Google Maps Embed -->
                <div class="mb-6">
                    @if($umkmUnggulan->latitude && $umkmUnggulan->longitude)
                        <iframe
                            width="100%"
                            height="300"
                            frameborder="0"
                            style="border:0"
                            src="https://www.google.com/maps?q={{ $umkmUnggulan->latitude }},{{ $umkmUnggulan->longitude }}&hl=es;z=14&output=embed"
                            allowfullscreen>
                        </iframe>
                    @else
                        <p class="text-red-500">Lokasi belum tersedia.</p>
                    @endif
                </div>

                <!-- Kontak -->
                <!-- Kontak dan Tombol WhatsApp -->
        <div class="flex justify-between items-center">
            <div class="w-1/2">
                <button>Sosmed</button>
            </div>
            <div class="w-1/2 flex justify-end items-end">
                @if ($umkmUnggulan->nomor_whatsapp)
                    @php
                        // Pastikan nomornya hanya angka (hapus + dan spasi)
                        $nomorWa = preg_replace('/[^0-9]/', '', $umkmUnggulan->nomor_whatsapp);
                        // Pastikan diawali dengan 62
                        if (substr($nomorWa, 0, 1) === '0') {
                            $nomorWa = '62' . substr($nomorWa, 1);
                        }
                    @endphp
                    <a
                        href="https://wa.me/{{ $nomorWa }}"
                        target="_blank"
                        class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-4 py-2 rounded-xl w-1/2 text-center"
                    >
                        WhatsApp
                    </a>
                @else
                    <p class="text-red-500 text-sm">Nomor WhatsApp belum tersedia.</p>
                @endif
            </div>
        </div>
            </div>
        </section>


        <section>
            <div class="px-6 md:px-16 py-10">
                <h3 class="text-xl md:2xl text-gray-900">UMKM Andalan Lainnya</h3> 
            </div>
        </section>

        @include('components.default.footer')
    </div>
</x-layouts.user.app>
