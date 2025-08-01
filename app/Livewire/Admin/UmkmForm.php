<?php

namespace App\Livewire\Admin;

use App\Models\Kategori;
use App\Models\Umkm;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;


class UmkmForm extends Component
{
    use WithFileUploads;

    public function render()
    {
        return view('livewire.admin.umkm-form',  [
            'kategoris' => Kategori::all()
        ]);
    }

    public $umkmId;
    public $nama, $deskripsi, $alamat, $nomor_whatsapp, $kategori_id, $foto,$foto_lama, $rw;
    public $latitude, $longitude;


    public function mount($umkm = null)
    {
        if ($umkm) {
            $data = Umkm::findOrFail($umkm);
            $this->umkmId = $data->id;
            $this->nama = $data->nama;
            $this->deskripsi = $data->deskripsi;
            $this->alamat = $data->alamat;
            $this->nomor_whatsapp = $data->nomor_whatsapp;
            $this->kategori_id = (string) $data->kategori_id;
            $this->foto_lama = $data->foto; // ini betul
            $this->latitude = $data->latitude;
            $this->longitude = $data->longitude;
            $this->rw = $data->rw;
        } 
    }



    public function save()
    {
        $validated = $this->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'alamat' => 'required|string',
            'nomor_whatsapp' => 'required|string',
            'kategori_id' => 'required|exists:kategoris,id',
            'rw' => 'required|in:1,2,3,4,5,6',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
        ]);

        $validated['kategori_id'] = (int) $this->kategori_id;

        //dd($validated);

        if ($this->foto) {
            $validated['foto'] = $this->foto->store('umkm', 'public');
        } else {
            $validated['foto'] = $this->foto_lama;
        }

        Umkm::updateOrCreate(
            ['id' => $this->umkmId],
            $validated,
        );

        session()->flash('success', 'UMKM berhasil disimpan.');
        return redirect()->route('admin.umkm');
    }
}
