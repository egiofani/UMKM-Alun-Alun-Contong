<x-layouts.user.app>
    <div class="bg-[#f0f9ff]">
        @include('components.default.navbar')
        <div class="mt-6 mb-6 px-10 py-6 bg-[#f0f9ff]/50 max-w-screen mx-4 border border-2 shadow-xl overflow-hidden">
        <section>
           <div class="w-full mx-auto p-4 flex flex-col items-center justify-center">
                <h1 class="text-2xl md:text-3xl font-extrabold mb-2">{{ $umkmUnggulan->nama }}</h1>
                <img src="{{ $umkmUnggulan->foto ? asset('storage/' . $umkmUnggulan->foto) : 'https://via.placeholder.com/300x200' }}" 
                alt="Foto UMKM" class="p-4 max-w-4xl w-full h-[20px] object-cover rounded-xl shadow-lg">
            </div>
        </section>

        <section class="px-6 py-5">
            <h3 class="text-xl md:text-2xl text-gray-900">Tentang {{ $umkmUnggulan->nama }}<h3>
            <p class="mb-4 text-gray-800">{{ $umkmUnggulan->deskripsi }}</p>
        </section>

        <section>
            <div class="py-4 px-6">
                <h3 class="text-xl md:text-2xl text-grey-900 mb-3 ">Produk Lainnya</h3>
                <div class="overflow-x-auto scrollbar-hide">
                <div class="flex gap-4 w-max">
                    @forelse($produkList as $produk)
                    <div class="min-w-[250px] max-w-xs">
                        <x-umkm.produk-card :produk="$produk" />
                    </div>
                    @empty
                        <p class="text-gray-500">Belum ada produk untuk UMKM ini.</p>
                    @endforelse
                </div>
                </div>
            </div>
        </section>

        <section>
            <div class="px-6 py-10">
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
                    <div class="w-1/2 flex justify-start items-start">
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
                                class="bg-[#0e7490] hover:bg-[#059669] text-white text-sm font-semibold px-4 py-2 rounded-xl w-1/2 text-center"
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
    </div> 


        <section>
            <div class="mx-4 mt-6 mb-6 px-14 py-6 max-w-screen overflow-hidden">
                <h3 class="text-xl md:text-2xl text-gray-900">UMKM Andalan Lainnya</h3>
                <div class="flex grid grid-cols-3 lg:grid-cols-4 mt-4 gap-6">
                     @foreach ($umkmLainnya as $umkm)
                        <x-umkm.umkm-card :umkm="$umkm" />
                    @endforeach
                </div>
            </div>
        </section>
    

        @include('components.default.footer')
</div>
</x-layouts.user.app>
