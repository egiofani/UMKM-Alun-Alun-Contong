<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'alamat', 'nomor_whatsapp', 'foto', 'kategori_id'];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}

