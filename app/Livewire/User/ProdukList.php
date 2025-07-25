<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukList extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedKategori = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSelectedKategori()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Produk::with('kategori', 'umkm');

        if ($this->search) {
            $query->where('nama', 'like', '%' . $this->search . '%');
        }

        if ($this->selectedKategori) {
            $query->where('kategori_id', $this->selectedKategori);
        }

        return view('livewire.user.produk-list', [
            'produks' => $query->latest()->paginate(10),
            'kategoriList' => Kategori::all(),
        ])->layout('components.layouts.user.app');
    }
}

