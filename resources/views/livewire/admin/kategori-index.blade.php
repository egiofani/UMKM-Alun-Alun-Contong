<div class="p-6 bg-white shadow text-gray-700 rounded-lg">
    @if (session('success'))
        <div class="mb-4 p-3 bg-green-500 text-green-500 rounded">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Daftar Kategori</h2>
        <a href="{{ route('kategori.create') }}"
           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
            + Tambah Kategori
        </a>
    </div>

    <table class="w-full text-sm text-left border border-gray-200">
        <thead class="bg-gray-100">
            <tr class="text-gray-700">
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Jumlah Produk</th>
                <th class="px-4 py-2 border">Jumlah UMKM</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategoris as $kategori)
                <tr class="border-t text-gray-700">
                    <td class="px-4 py-2">{{ $kategori->nama }}</td>
                    <td class="px-4 py-2">{{ $kategori->produk_count }}</td>
                    <td class="px-4 py-2">{{ $kategori->umkm_count }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('kategori.edit', $kategori->id) }}"
                           class="text-blue-600 hover:underline">Edit</a>

                           <button wire:click="confirmDelete({{ $kategori->id }})"
                                class="bg-red-500 text-white px-2 py-1 text-xs rounded">
                            Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center px-4 py-2 text-gray-500">
                        Belum ada data kategori.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @if ($confirmingDeleteId)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                <h2 class="text-lg font-bold mb-4">Konfirmasi Hapus</h2>
                <p class="mb-4">Apakah Anda yakin ingin menghapus kategori ini?</p>

                <div class="flex justify-end space-x-2">
                    <button wire:click="$set('confirmingDeleteId', null)"
                            class="bg-gray-300 text-gray-800 px-4 py-2 rounded">
                        Batal
                    </button>

                    <button wire:click="deleteKategori"
                            class="bg-red-500 text-white px-4 py-2 rounded">
                        Ya, Hapus
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
