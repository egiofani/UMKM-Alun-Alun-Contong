<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Umkm;


class UmkmIndex extends Component
{
    public $umkms;

    public function mount()
    {
        $this->umkms = Umkm::with(['kategori', 'produk'])->get(); // eager load relasi
    }

    public function render()
        {
    return view('livewire.admin.umkm-index') // ganti sesuai nama view-mu
           ; // pastikan layouts.app ada    
    }
}