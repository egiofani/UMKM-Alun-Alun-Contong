<div class="p-6 bg-white shadow text-gray-700 rounded-lg">
    <h2 class="text-2xl font-bold mb-4">Daftar UMKM</h2>

    <table class="w-full text-sm text-left border border-gray-200 ">
        <thead class="bg-gray-100 ">
            <tr class="text-gray-700">
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Deskripsi</th>
                <th class="px-4 py-2 border">Alamat</th>
                <th class="px-4 py-2 border">WhatsApp</th>
                <th class="px-4 py-2 border">Kategori</th>
                <th class="px-4 py-2 border">Jumlah Produk</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($umkms as $umkm)
                <tr class="border-t text-gray-700">
                    <td class="px-4 py-2">{{ $umkm->nama }}</td>
                    <td class="px-4 py-2">{{ $umkm->deskripsi }}</td>
                    <td class="px-4 py-2">{{ $umkm->alamat }}</td>
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
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center px-4 py-2 text-gray-500">Belum ada data UMKM.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
