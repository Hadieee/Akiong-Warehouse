<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemasok extends Model
{
    use HasFactory;

    protected $table = 'pemasoks';
    protected $fillable = ['id_pemasok', 'nama_pemasok', 'no_telepon'];
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
