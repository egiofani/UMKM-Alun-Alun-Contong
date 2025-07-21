<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Umkm;
use Livewire\WithFileUploads;

class ProdukForm extends Component
{
    use WithFileUploads;

    public $produkId;
    public $nama, $harga, $kategori_id, $umkm_id, $foto, $fotoLama;

    protected $rules = [
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric|min:0',
        'kategori_id' => 'required|exists:kategoris,id',
        'umkm_id' => 'required|exists:umkms,id',
        'foto' => 'nullable|image|max:2048',

    ];

    public function mount($id = null)
    {
        if ($id) {
            $produk = Produk::findOrFail($id);
            $this->produkId = $produk->id;
            $this->nama = $produk->nama;
            $this->harga = $produk->harga;
            $this->kategori_id = $produk->kategori_id;
            $this->umkm_id = $produk->umkm_id;
            $this->fotoLama = $produk->foto;
        }
    }

    public function simpan()
    {
        $this->validate();

        $path = $this->foto ? $this->foto->store('produks', 'public') : $this->fotoLama;

        if ($this->produkId) {
            $produk = Produk::find($this->produkId);
            $produk->update([
                'nama' => $this->nama,
                'harga' => $this->harga,
                'kategori_id' => $this->kategori_id,
                'umkm_id' => $this->umkm_id,
                'foto' => $path,
            ]);

            session()->flash('success', 'Produk berhasil diperbarui.');
        } else {
            Produk::create([
                'nama' => $this->nama,
                'harga' => $this->harga,
                'kategori_id' => $this->kategori_id,
                'umkm_id' => $this->umkm_id,
                'foto' => $path,
            ]);

            session()->flash('success', 'Produk berhasil ditambahkan.');
        }

        return redirect()->route('admin.produk');
    }

    public function render()
    {
        return view('livewire.admin.produk-form', [
            'kategoris' => Kategori::all(),
            'umkms' => Umkm::all(),
        ]);
    }
}
