<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Produk;

class ProdukIndex extends Component
{
    public function render()
    {
        $produks = Produk::with(['kategori', 'umkm'])->latest()->get();

        return view('livewire.admin.produk-index', [
            'produks' => $produks,
        ]);
    }
}
