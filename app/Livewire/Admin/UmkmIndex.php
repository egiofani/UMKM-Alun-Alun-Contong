<?php

namespace App\Livewire\Admin;


use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Umkm;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;



class UmkmIndex extends Component
{
    use WithFileUploads;

    public $umkms, $nama, $deskripsi, $alamat, $nomor_whatsapp, $kategori_id, $foto;
    public $umkmId;

    public $isEdit = false;
    public $confirmingDeleteId = null;

     protected $rules = [
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'alamat' => 'required|string',
        'nomor_whatsapp' => 'required|string',
        'kategori_id' => 'required|exists:kategoris,id',
        'foto' => 'nullable|image|max:2048',
    ];

    public function mount()
    {
        $this->umkms = Umkm::with(['kategori', 'produk'])->get(); // eager load relasi
    }

    public function render()
    {
        return view('livewire.admin.umkm-index', [
            'umkms' => Umkm::with('kategori')->latest()->get(),
            'kategoris' => Kategori::all(),
        ]);  
    }

    public function resetForm()
    {
        $this->nama = $this->deskripsi = $this->alamat = $this->nomor_whatsapp = $this->foto = null;
        $this->kategori_id = '';
        $this->isEdit = false;
        $this->umkmId = null;
    }

    public function store()
    {
        $this->validate();

        $path = $this->foto ? $this->foto->store('umkm', 'public') : null;

        Umkm::create([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'alamat' => $this->alamat,
            'nomor_whatsapp' => $this->nomor_whatsapp,
            'kategori_id' => $this->kategori_id,
            'foto' => $path,
        ]);

        session()->flash('success', 'UMKM berhasil ditambahkan');
        $this->resetForm();
    }

    public function edit($id)
    {
        $umkm = Umkm::findOrFail($id);
        $this->umkmId = $umkm->id;
        $this->nama = $umkm->nama;
        $this->deskripsi = $umkm->deskripsi;
        $this->alamat = $umkm->alamat;
        $this->nomor_whatsapp = $umkm->nomor_whatsapp;
        $this->kategori_id = $umkm->kategori_id;
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate();

        $umkm = Umkm::findOrFail($this->umkmId);
        $path = $this->foto ? $this->foto->store('umkm', 'public') : $umkm->foto;

        $umkm->update([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'alamat' => $this->alamat,
            'nomor_whatsapp' => $this->nomor_whatsapp,
            'kategori_id' => $this->kategori_id,
            'foto' => $path,
        ]);

        session()->flash('success', 'UMKM berhasil diperbarui');
        $this->resetForm();
    }
    

    public function confirmDelete($id)
    {
        $this->confirmingDeleteId = $id;
    }

    public function delete()
    {
        $umkm = Umkm::findOrFail($this->confirmingDeleteId);

        if ($umkm->foto && Storage::exists($umkm->foto)) {
            Storage::delete($umkm->foto);
        }

        $umkm->delete();
        $this->confirmingDeleteId = null;

        // Refresh ulang daftar umkm
        $this->umkms = Umkm::with(['kategori', 'produk'])->get();

        session()->flash('message', 'Data UMKM berhasil dihapus.');
    }



}