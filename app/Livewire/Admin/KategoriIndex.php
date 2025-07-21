<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Kategori;

class KategoriIndex extends Component
{
     public $confirmingDeleteId = null;

     public function confirmDelete($id)
    {
        $this->confirmingDeleteId = $id;
    }

    public function deleteKategori()
    {
        Kategori::findOrFail($this->confirmingDeleteId)->delete();
        session()->flash('success', 'Kategori berhasil dihapus.');
        $this->confirmingDeleteId = null;
    }

    public function render()
    {
        $kategoris = Kategori::withCount(['produk', 'umkm'])->get();

        return view('livewire.admin.kategori-index', [
            'kategoris' => $kategoris,
        ]);
    }


}

