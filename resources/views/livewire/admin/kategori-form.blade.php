<div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-500 mb-6 border-b pb-2">Tambah Kategori</h2>

    @if (session()->has('success'))
        <div class="mb-4 px-4 py-3 rounded bg-green-100 text-green-800 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-5">
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-500 mb-1">Nama Kategori</label>
            <input type="text" wire:model.defer="nama" id="nama"
                   class="text-gray-500  block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400 text-sm"
                   placeholder="Contoh: Makanan, Fashion">
            @error('nama') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-between items-center  pt-4 border-t">
            <a href="{{ route('admin.kategori') }}"
               class="inline-block px-4 py-2 bg-gray-500 text-gray-500 text-sm rounded hover:bg-gray-100 transition">
                ← Kembali
            </a>
            <button type="submit"
                    class="inline-block px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-500 transition">
                Simpan
            </button>
        </div>
    </form>
</div>
