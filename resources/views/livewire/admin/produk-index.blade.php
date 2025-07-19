<div class="p-4">
    <h2 class="text-xl text-gray-600 font-bold mb-4">Daftar Produk</h2>

    <div class="text-gray-600 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($produks as $produk)
            <div class="bg-white rounded-lg shadow p-4">
                <h3 class="text-gray-500 text-lg font-semibold">{{ $produk->nama }}</h3>
                <p class="text-gray-500 mb-1">Harga: Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                <p class="text-gray-500 mb-1">Kategori: {{ $produk->kategori->nama ?? '-' }}</p>
                <p class="text-gray-500">UMKM: {{ $produk->umkm->nama ?? '-' }}</p>

                @if($produk->foto)
                    <img src="{{ asset('storage/' . $produk->foto) }}" alt="{{ $produk->nama }}" class="mt-2 rounded-md w-full h-40 object-cover">
                @endif
            </div>
        @endforeach
    </div>
</div>
