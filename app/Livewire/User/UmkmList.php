<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Umkm;
use App\Models\Kategori;

class UmkmList extends Component
{
    use WithPagination;

    public $search = '';
    public $filterKategori = '';
    public $filterRw = ''; 


    protected $queryString = ['search', 'filterKategori'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingFilterKategori()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Umkm::with('kategori');

        if ($this->search) {
            $query->where('nama', 'like', '%' . $this->search . '%');
        }

        if ($this->filterKategori) {
            $query->where('kategori_id', $this->filterKategori);
        }

        $umkmUnggulan = $query->paginate(9);
        $kategoris = Kategori::all();

        return view('livewire.user.umkm-list', compact('umkmUnggulan', 'kategoris'))
            ->layout('components.layouts.user.app');
    }
}
