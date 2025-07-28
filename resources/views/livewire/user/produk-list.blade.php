<div>
    @include('components.default.navbar')
    <div class="min-h-screen px-6 md:px-16 py-10">
        <h2 class="fade-in text-center font-bold text-2xl md:text-3xl mb-4">Daftar Produk UMKM Lokal</h2>

        <div class="slide-in-up flex flex-col items-center w-full">
            <div class="w-full max-w-4xl">
                <!-- Search Bar -->
                <div class="flex items-center justify-left w-full border border-2 border-[#9ca3af] bg-white rounded-full px-4 py-2 shadow-sm mb-6">
                    <input
                        type="text"
                        placeholder="Cari produk..."
                        wire:model.lazy.debounce.300ms="search"
                        
                        class="flex-grow outline-none bg-transparent text-sm px-2"
                    />
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35z" />
                    </svg>
                </div>

                <!-- Filter Dropdown -->
                <div class="flex justify-start mb-6">
                    <select wire:model.lazy="filterKategori" class="border border-2 border-[#9ca3af] px-4 py-2 rounded">
                        <option value="">-- -- Semua Kategori -- --</option>
                        @foreach ($kategoriList as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Produk Cards -->
        <div class="grid grid-cols-3 lg:grid-cols-4 gap-10">
            @forelse ($produks as $produk)
            <div class="slide-in-up" wire:key="produk-{{ $produk->id }}">
                <x-umkm.produk-card :produk="$produk" />
            </div>    
            @empty
                <p class="text-center w-full">Tidak ada produk ditemukan.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="slide-in-up flex flex-col items-center space-y-2 mt-8 mb-10">
            {{ $produks->links() }}
        </div>
    </div>
        


    @include('components.default.footer')
</div>

