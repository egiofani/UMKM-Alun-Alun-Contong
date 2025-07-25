<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Umkm;

class UmkmList extends Component
{
   
    public function render()
    {
        $umkmUnggulan = Umkm::with('kategori')->get();

        return view('livewire.user.umkm-list',[
            'umkmUnggulan' => $umkmUnggulan
        ])->layout('components.layouts.user.app');
    }
}
