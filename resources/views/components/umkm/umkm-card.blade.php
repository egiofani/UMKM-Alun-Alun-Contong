@props(['umkm'])

<div class="bg-white rounded-2xl border shadow-md w-full max-w-xs overflow-hidden text-md">
    <div class="relative">
        <span class="absolute top-0 left-0 bg-blue-500 text-white font-semibold px-5 py-2 rounded-br-xl rounded-tl-xl z-10">
            {{ $umkm->kategori->nama }}
        </span>
        <img src="{{ $umkm->foto ? asset('storage/' . $umkm->foto) : asset('images/kegiatan 1.png') }}"
             alt="{{ $umkm->nama }}"
             class="w-full h-48 object-cover rounded-t-xl">
    </div>
    <h3 class="p-4 font-bold text-gray-800">
        {{ $umkm->nama }}
    </h3>
    <div class="p-4">
        <a href="{{ Route('user.detailumkm', ['id' => $umkm->id]) }}"
        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-xl w-full block text-center">
            Lihat Detail
        </a>
    </div>
</div>
