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
                 <h3 class="text-xl md:2xl text-gray-900">Lokasi dan Kontak</h3> 
                 <div class="py-10 px-6 md:px-16">{{ $umkmUnggulan->lokasi }}</div>
                 <div class="flex justify-between items-center">
                    <div class="w-1/2">
                        <button>Sosmed</button>
                    </div>
                    <div class="w-1/2 flex justify-end items-end">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-xl w-1/2">
                        <a href="#">
                            WhatsApp
                        </a></button>
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
