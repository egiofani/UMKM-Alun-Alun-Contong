
<div class="p-6 bg-white shadow text-gray-700 rounded-lg">
@if (session()->has('message'))
    <div class="p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg flex justify-between items-center">
        <span>{{ session('message') }}</span>
        <a href="{{ route('admin.umkm') }}"
           class="ml-4 px-3 py-1 text-white bg-blue-600 hover:bg-blue-700 rounded">
            Kembali
        </a>
    </div>
@endif
 <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Daftar UMKM</h2>
        <a href="{{ route('umkm.create') }}"
           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
            + Tambah UMKM
        </a>
    </div>

<div class="overflow-x-auto bg-white rounded-xl shadow-md">
    <table class="w-full text-sm text-left border border-gray-200 ">
        <thead class="bg-gray-100 ">
            <tr class="text-gray-700">
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Deskripsi</th>
                <th class="px-4 py-2 border">Alamat</th>
                <th class="px-4 py-2 border">WhatsApp</th>
                <th class="px-4 py-2 border">Kategori</th>
                <th class="px-4 py-2 border">Jumlah Produk</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($umkms as $umkm)
                <tr class="border-t text-gray-700">
                    <td class="px-4 py-2">
                        <div class="flex flex-col items-center">
                            <img
                                src="{{ asset('storage/' . $umkm->foto) }}"
                                class=" w-10 object-cover rounded mb-2 shadow"
                            >
                            <span class="text-gray-700 font-medium text-center">{{ $umkm->nama }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-2">{{ $umkm->deskripsi }}</td>
                    <td class="px-4 py-2">{{ $umkm->alamat }} RW {{ $umkm->rw }}</td>
                    <td class="px-4 py-2">
                        <a href="https://wa.me/{{ $umkm->nomor_whatsapp }}" target="_blank" class="text-green-600 underline">
                            {{ $umkm->nomor_whatsapp }}
                        </a>
                    </td>
                    <td class="px-4 py-2">
                        {{ $umkm->kategori->nama ?? '-' }}
                    </td>
                    <td class="px-4 py-2">
                        {{ $umkm->produk->count() }}
                    </td>
                    <td class="px-4 py-2">
                        <a href="{{ route('umkm.edit', $umkm->id) }}"
                        class="text-blue-600 hover:underline">Edit</a>
                        <button wire:click="confirmDelete({{ $umkm->id }})"
                            class="bg-red-500 text-white px-2 py-1 text-xs rounded">
                            Hapus
                        </button>
                    </td>
                </tr>
                
            @empty
                <tr>
                    <td colspan="6" class="text-center px-4 py-2 text-gray-500">Belum ada data UMKM.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @if ($confirmingDeleteId)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded shadow max-w-sm w-full">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Konfirmasi Hapus</h2>
                <p class="text-gray-700 mb-4">Apakah Anda yakin ingin menghapus UMKM ini?</p>
                <div class="flex justify-end gap-2">
                    <button wire:click="$set('confirmingDeleteId', null)"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                        Batal
                    </button>
                    <button wire:click="delete"
                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
