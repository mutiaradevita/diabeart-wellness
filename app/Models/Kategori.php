<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    public $timestamps = false;
    protected $primaryKey= 'id';

    protected $fillable = [
        'id',
        'nama_kategori',
        'produk',
    ];

    public function produk(){
        return $this->belongsToMany(Produk::class, 'kategori_produk', 'id_produk', 'id_kategori');
    }
}
