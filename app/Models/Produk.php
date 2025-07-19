<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['umkm_id', 'kategori_id', 'nama', 'deskripsi', 'harga', 'foto'];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
