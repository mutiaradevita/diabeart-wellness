<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Produk extends Model
{
    use HasFactory;

    protected $table = 'kategori_produk';
    protected $fillable = ['id_kategori', 'id_produk'];
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
