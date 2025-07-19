<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Kategori;

class KategoriIndex extends Component
{
    public function render()
    {
        $kategoris = Kategori::withCount(['produk', 'umkm'])->get();

        return view('livewire.admin.kategori-index', [
            'kategoris' => $kategoris,
        ]);
    }
}

