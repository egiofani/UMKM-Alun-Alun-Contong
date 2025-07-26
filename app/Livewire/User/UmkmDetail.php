<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Umkm;
use App\Models\Produk;

class UmkmDetail extends Component
{
    public $id;
    public $umkmUnggulan;
   
    public function mount($id)
    {
        $this->umkmUnggulan = Umkm::findOrFail($id);

        $this->umkmLainnya = Umkm::where('id', '!=', $id)
                            ->inRandomOrder()
                            ->limit(3)
                            ->get();
    }
    
    public function render()
    {

        return view('livewire.user.umkm-detail',[
            'umkmUnggulan' => $this->umkmUnggulan,
            'produkList' => $this->umkmUnggulan->produk,
            'umkmLainnya' => $this->umkmLainnya,
        ])->layout('components.layouts.user.app');
    }
}
