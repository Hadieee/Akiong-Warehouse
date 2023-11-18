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
    protected $appends = ['total_barang'];

    public function barang(): HasMany
    {
        return $this->hasMany(Barang::class);
    }

    public function getTotalBarangAttribute()
    {
        return $this->barang->count();
    }
}
