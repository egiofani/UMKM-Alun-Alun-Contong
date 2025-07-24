<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Umkm;

class Home extends Component
{
    public function render()
    {
        $umkmUnggulan = Umkm::with('kategori')->get();

        return view('livewire.user.home', [
            'umkmUnggulan' => $umkmUnggulan
        ]);
    }
}

