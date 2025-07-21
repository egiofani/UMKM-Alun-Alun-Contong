<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Kategori;

class KategoriForm extends Component
{
    public $kategoriId;
    public $nama;
    

    protected function rules()
    {
        return [
            'nama' => 'required|string|max:255|unique:kategoris,nama,' . $this->kategoriId,
        ];
    }

    public function mount($id = null)
    {
        $this->kategoriId = $id;

        if ($this->kategoriId) {
            $kategori = Kategori::findOrFail($this->kategoriId);
            $this->nama = $kategori->nama;
        }
    }

    public function submit()
    {
        $this->validate([
            'nama' => 'required|string|max:255',
        ]);

        if ($this->kategoriId) {
            $kategori = Kategori::findOrFail($this->kategoriId);
            $kategori->update(['nama' => $this->nama]);
            session()->flash('success', 'Kategori berhasil diperbarui.');
        } else {
            Kategori::create(['nama' => $this->nama]);
            session()->flash('success', 'Kategori berhasil ditambahkan.');
        }

        return redirect()->route('admin.kategori');
    }

    

    public function render()
    {
        return view('livewire.admin.kategori-form');
    }
}