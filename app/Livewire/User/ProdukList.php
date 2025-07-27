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
    public $filterKategori = '';

     public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updated($property)
    {
        if (in_array($property, ['filterKategori', 'filterRw'])) {
            $this->resetPage(); // kalau pakai pagination
        }
    }

    public function render()
    {
        $query = Produk::with('kategori', 'umkm');

        if ($this->search) {
            $query->where('nama', 'like', '%' . $this->search . '%');
        }

        if ($this->filterKategori) {
            $query->where('kategori_id', $this->filterKategori);
        }

        return view('livewire.user.produk-list', [
            'produks' => $query->latest()->paginate(12),
            'kategoriList' => Kategori::all(),
        ])->layout('components.layouts.user.app');
    }
}

