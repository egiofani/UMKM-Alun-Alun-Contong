<x-layouts.user.app>
    <div>
        @include('components.default.navbar')
        <div class="px-6 md:px-16 py-10">
            <h2 class="text-center font-bold text-2xl md:text-3xl mb-4">UMKM Lokal Andalan Kami</h2>

            <div class="flex flex-col items-center w-full">
                <div class="w-full max-w-4xl">
                    <!-- Search Bar -->
                    <div class="flex items-center justify-left w-full border rounded-full px-4 py-2 shadow-sm mb-6">
                        <input
                            type="text"
                            placeholder="Cari..."
                            class="flex-grow outline-none bg-transparent text-sm px-2"
                        />
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35z" />
                        </svg>
                    </div>

                    <!-- Filter Dropdowns -->
                    <div class="flex flex-wrap justify-start gap-2 mb-6">
                        @include('components.umkm.dropdown', [
                            'label' => 'Filter RW',
                            'items' => ['RW 01', 'RW 02', 'RW 03']
                        ])
                        @include('components.umkm.dropdown', [
                            'label' => 'Filter Kategori',
                            'items' => ['Kuliner', 'Fashion', 'Kerajinan']
                        ])
                    </div>
                </div>
            </div>


            <div class="flex flex-wrap gap-10 ">
                @foreach($umkmUnggulan as $umkm)
                    <x-umkm.umkm-card :umkm="$umkm" />
                @endforeach
            </div>
        </div>
    @include('components.default.footer')
    </div>
</x-layouts.user.app>
