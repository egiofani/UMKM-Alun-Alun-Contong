<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Produk;

class ProdukList extends Component
{
    public function render()
    {
        return view('livewire.user.produk-list', [
            'produks' => Produk::with(['kategori', 'umkm'])->latest()->paginate(10),
        ])->layout('components.layouts.user.app');
    }
}
