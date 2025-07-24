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

        <button
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-full"
            type="button"
            onclick="openMapModal()"
        >
            Pilih Lokasi UMKM
        </button>

        <!-- Preview lokasi -->
        <div id="locationPreview" class="hidden mt-4 p-4 border rounded bg-green-50 text-green-800">
            <p class="font-semibold">Lokasi berhasil dipilih</p>
            <p>Latitude: <span id="latDisplay"></span></p>
            <p>Longitude: <span id="lonDisplay"></span></p>
        </div>

        <!-- Hidden inputs for Livewire or Form -->
        <input type="hidden" id="lat" name="lat" />
        <input type="hidden" id="lon" name="lon" />

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan
        </button>
    </form>

    <div
        id="mapModal"
        class="fixed inset-0 z-50 hidden bg-black bg-opacity-40 flex items-center justify-center"
    >
        <div class="bg-white rounded-lg shadow-lg w-full max-w-3xl p-4 relative">
            <h2 class="text-xl font-semibold mb-4">Tentukan Lokasi UMKM</h2>

            <div id="map" style="height:200px;" class="w-50 rounded mb-4"></div>

            <div class="flex justify-end space-x-2">
                <button
                    onclick="closeMapModal()"
                    class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded"
                >
                    Batal
                </button>
                <button
                    onclick="confirmLocation()"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded"
                >
                    Simpan Lokasi
                </button>
            </div>
        </div>
    </div>
</div>




    