<div class="p-4">
    <h2 class="text-xl font-bold mb-4">Daftar Kategori</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($kategoris as $kategori)
            <div class="bg-white shadow rounded-lg p-4">
                <h3 class="text-gray-500 text-lg font-semibold">{{ $kategori->nama }}</h3>
                <p class="text-gray-500">Jumlah Produk: {{ $kategori->produks_count }}</p>
                <p class="text-gray-500">Jumlah UMKM: {{ $kategori->umkms_count }}</p>
            </div>
        @endforeach
    </div>
</div>
