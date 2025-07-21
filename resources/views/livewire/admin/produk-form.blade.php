<div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
    <h2 class="text-2xl text-gray-500 font-bold mb-4">Tambah Produk</h2>

    @if (session('success'))
        <div class="p-3 mb-4 bg-green-500 text-white rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="simpan" enctype="multipart/form-data" class="space-y-4">

        <div>
            <label class="block text-sm text-gray-500">Nama Produk</label>
            <input type="text" wire:model.defer="nama" class="w-full text-gray-500 border rounded p-2" />
            @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-500">Harga</label>
            <input type="number" wire:model.defer="harga" class="w-full text-gray-500 border rounded p-2" />
            @error('harga') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-500">Kategori</label>
            <select wire:model.defer="kategori_id" class="w-full text-gray-500 border  rounded p-2">
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoris as $kategori)
                    <option class="text-gray-500" value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
            @error('kategori_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-500">UMKM</label>
            <select wire:model.defer="umkm_id" class="w-full text-gray-500 border rounded p-2">
                <option value="">-- Pilih UMKM --</option>
                @foreach($umkms as $umkm)
                    <option value="{{ $umkm->id }}">{{ $umkm->nama }}</option>
                @endforeach
            </select>
            @error('umkm_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-500">Foto Produk</label>
            <input type="file" wire:model="foto" class="w-full text-gray-500 border rounded p-2" />
            @error('foto') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            @if ($foto)
                <img src="{{ $foto->temporaryUrl() }}" class="w-10 mt-2 rounded">
            @endif
        </div>

        <div class="flex justify-between">
            <button type="submit" class="bg-blue-500 mt-2 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan
            </button>
            <a href="{{ route('admin.produk') }}" class="text-sm mt-2 text-blue-600 hover:underline mb-2 inline-block">
                ← Kembali ke Daftar Produk
            </a>
        </div>
        

    </form>
</div>
