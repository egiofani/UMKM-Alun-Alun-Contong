<div class="p-6 bg-white shadow rounded-lg">
    <h2 class="text-xl text-gray-700 font-bold mb-4">{{ $umkmId ? 'Edit' : 'Tambah' }} UMKM</h2>

    <form wire:submit.prevent="save" class="space-y-4" enctype="multipart/form-data">
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" wire:model.defer="nama" class="w-full border text-gray-700 px-3 py-2 rounded" />
            @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea wire:model.defer="deskripsi" class="w-full border text-gray-700 px-3 py-2 rounded"></textarea>
            @error('deskripsi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea wire:model.defer="alamat" class="w-full border text-gray-700 px-3 py-2 rounded"></textarea>
            @error('alamat') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
            <input type="text" wire:model.defer="nomor_whatsapp" class="w-full border text-gray-700 px-3 py-2 rounded" />
            @error('nomor_whatsapp') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Kategori</label>
            <select wire:model.defer="kategori_id" class="w-full border text-gray-700 px-3 py-2 rounded">
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
            @error('kategori_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

       <div>
            <label class="block text-sm font-medium text-gray-700">Foto / Logo UMKM</label>
            <input type="file" wire:model="foto" class="w-full border text-gray-700 px-3 py-2 rounded" />
            @error('foto') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            <div class="mt-2">
                <div class="mt-2">
                @error('foto') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            @if ($foto)
                <img src="{{ $foto->temporaryUrl() }}" class="w-10 mt-2 rounded">
            @endif
                </div>
            </div>

        </div>


        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan
        </button>
    </form>
</div>
