<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

    public function umkm()
{
    return $this->hasMany(Umkm::class);
}
}

