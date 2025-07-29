
<div class="p-6 bg-white border border-[#bae6fd] shadow-lg text-gray-700 rounded-lg">
    @if (session()->has('success'))
    <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Daftar Produk</h2>
        <a href="{{ route('produk.create') }}"
           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
            + Tambah Produk
        </a>
    </div>

    <div class="overflow-x-auto bg-white border border-[#bae6fd] rounded-xl shadow-md">
        <table class="w-full table-auto border border-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3 border-b">No</th>
                    <th class="px-4 py-3 border-b">Foto</th>
                    <th class="px-4 py-3 border-b">Nama</th>
                    <th class="px-4 py-3 border-b">Harga</th>
                    <th class="px-4 py-3 border-b">Kategori</th>
                    <th class="px-4 py-3 border-b">UMKM</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-500 divide-y divide-gray-200">
                @forelse($produks as $index => $produk)
                    <tr class="hover:bg-gray-50 transition-colors text-gray-500">
                        <td class="px-4 py-3">{{ $produks->firstItem() + $index }}</td>
                        <td class="px-4 py-3">
                            @if($produk->foto)
                                <img src="{{ asset('storage/' . $produk->foto) }}" alt="{{ $produk->nama }}" class="w-14 h-14 object-cover rounded-md">
                            @else
                                <span class="text-gray-500 italic">-</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 font-medium">{{ $produk->nama }}</td>
                        <td class="px-4 py-3">Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-3">{{ $produk->kategori->nama ?? '-' }}</td>
                        <td class="px-4 py-3">{{ $produk->umkm->nama ?? '-' }}</td>
                        <td class="px-4 py-2 text-center">
                        <a href="{{ route('produk.edit', $produk->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                        <button wire:click="confirmDelete({{ $produk->id }})" 
                        class="bg-red-500 text-white px-2 py-1 text-xs rounded ml-3">Hapus</button>
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-3 text-center text-gray-500">Tidak ada produk ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if($confirmingDeleteId)
<div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
        <p class="text-lg mb-4 text-gray-700">Apakah kamu yakin ingin menghapus produk ini?</p>
        <div class="flex justify-center space-x-4">
            <button wire:click="$set('confirmingDeleteId', null)" class="bg-gray-300 px-4 py-2 rounded">Batal</button>
            <button wire:click="deleteProduk" class="bg-red-500 text-white px-4 py-2 rounded">Ya, Hapus</button>
        </div>
    </div>
</div>
@endif
    </div>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $produks->links() }}
    </div>
</div>
