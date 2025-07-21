<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Produk;

use Livewire\WithPagination;

class ProdukIndex extends Component
{
    use WithPagination;

    public $confirmingDeleteId = null;

    public function confirmDelete($id)
    {
        $this->confirmingDeleteId = $id;
    }

    public function deleteProduk()
    {
        Produk::findOrFail($this->confirmingDeleteId)->delete();
        session()->flash('success', 'Produk berhasil dihapus.');
        $this->confirmingDeleteId = null;
    }

    public function render()
    {
        return view('livewire.admin.produk-index', [
            'produks' => Produk::with(['kategori', 'umkm'])->latest()->paginate(10),
        ]);
    }
}
