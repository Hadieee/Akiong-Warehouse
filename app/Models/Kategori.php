<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $fillable = ['id_kategori', 'nama_kategori'];

    public function kategori(): HasMany
    {
        return $this->HasMany(Barang::class);
    }

    public function getTotalKategoriAttribute()
    {
        return $this->kategori->count();
    }
}
