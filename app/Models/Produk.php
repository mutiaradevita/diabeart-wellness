<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama',
        'gambar',
        'deskripsi',
        'harga',
        'komposisi',
        'karbo',
        'protein',
        'kalori',
        'serat',
        'kategori',
    ];

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'kategori_produk', 'id_produk', 'id_kategori');
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }

    public function ulasan(){
        return $this->hasMany(Ulasan::class);
    }
}
