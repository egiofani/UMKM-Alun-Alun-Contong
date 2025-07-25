@props(['umkm'])

<div class="bg-white rounded-2xl border shadow-md w-full max-w-xs overflow-hidden">
    <div class="relative">
        <span class="absolute top-0 left-0 bg-blue-500 text-white text-md font-semibold px-5 py-2 rounded-br-xl rounded-tl-xl z-10">
            {{ $umkm->kategori->nama }}
        </span>
        <img src="{{ $umkm->foto ? asset('storage/' . $umkm->foto) : 'https://via.placeholder.com/300x200' }}"
             alt="{{ $umkm->nama }}"
             class="w-full h-48 object-cover">
    </div>
    <h3 class="p-4 text-lg font-bold text-gray-800">
        {{ $umkm->nama }}
    </h3>
    <div class="p-4">
        <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-xl w-full"> 
            <a href="{{ Route('user.detailumkm', ['id' => $umkm->id]) }}">
            Lihat Detail
            </a> 
        </button>
    </div>
</div>
