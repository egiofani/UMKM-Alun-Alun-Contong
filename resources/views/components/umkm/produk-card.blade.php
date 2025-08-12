@props(['produk'])

<div x-data="{ open: false }" class="slide-in-up bg-white rounded-2xl border shadow-md w-full max-w-xs overflow-hidden text-xl">
    <div class="relative">
        <img src="{{ $produk->foto ? asset('storage/produk/' . $produk->foto) : asset('images/kegiatan 1.webp') }}"
             alt="{{ $produk->nama }}"
             class="rounded-xl w-80 h-40 object-cover rounded-t-xl">
        <span class="absolute top-0 left-0 bg-blue-500 text-white text-xl lg:text-md font-semibold px-5 py-2 rounded-br-xl rounded-tl-xl z-10">
            {{ $produk->kategori->nama }}
        </span>
    </div>
    <div class="p-4 text-xl lg:text-md">
        <h3 class="font-bold text-gray-900">{{ $produk->nama }}</h3>
        <p class="text-gray-700 font-semibold">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
        <p class="text-gray-500">{{ $produk->umkm->nama }}</p>
    </div>
    <div class="p-4">
        <button @click="open = true" 
        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-xl w-full text-xl lg:text-md">
            Lihat Detail
        </button>
    </div>

    <!-- Modal -->
    <div
        x-show="open"
        x-cloak
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-12 w-full lg:max-w-2xl mx-4 relative">
            <button @click="open = false" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-xl font-bold">&times;</button>
            <div class="flex flex-row gap-3">
                <div class="w-1/2 h-auto">
                    <img src="{{ $produk->foto ? asset('storage/produk/' . $produk->foto) : 'https://via.placeholder.com/400x250' }}" 
                    class="rounded-lg mb-4 w-full h-60 object-cover" />
                </div>
                <div class="w-1/2 text-xl lg:text-md">
                     <h2 class="font-extrabold mb-4">{{ $produk->nama }}</h2>
                    <p class="text-gray-700 mb-2"><strong>Harga:</strong> Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                    <p class="text-gray-700 mb-2"><strong>Kategori:</strong> {{ $produk->kategori->nama }}</p>
                    <p class="text-gray-700 mb-2"><strong>UMKM:</strong> {{ $produk->umkm->nama }}</p>
                    <p class="text-gray-700 mt-4">{{ $produk->deskripsi}}</p>
                </div>
            </div>
            <div class="flex flex-row gap-3 mt-4">
                <div class="w-1/2 text-xl lg:text-md">
                    @if (Route::currentRouteName() === 'user.produk')
                        @php
                            $nomorWa = preg_replace('/[^0-9]/', '', $produk->umkm->nomor_whatsapp ?? '');
                            if (substr($nomorWa, 0, 1) === '0') {
                                $nomorWa = '62' . substr($nomorWa, 1);
                            }
                        @endphp

                        @if ($nomorWa)
                            <button
                                type="button"
                                onclick="window.open('https://wa.me/{{ $nomorWa }}', '_blank')"
                                class="bg-[#0e7490] hover:bg-[#164e63] text-white text-xl font-semibold px-4 py-2 rounded-xl w-full block text-center mt-4"
                            >
                                Hubungi Nomor WhatsApp
                            </button>
                        @else
                            <p class="text-red-500 text-xl mt-4">Nomor WhatsApp belum tersedia.</p>
                        @endif
                    @endif
                </div>
                <div class="w-1/2 text-xl">
                    @if (Route::currentRouteName() === 'user.produk')
                        <a href="{{ route('user.detailumkm', $produk->umkm->id) }}"
                        class="bg-[#0e7490] hover:bg-[#164e63] text-white text-xl lg:text-md font-semibold px-4 py-2 rounded-xl w-full block text-center mt-4">
                            Lihat Detail UMKM
                        </a>
                    @endif
                </div>      
            </div>  
        </div>
    </div>
</div>
