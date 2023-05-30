<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = "keranjang";
    use HasFactory;

    protected $fillable = [
        'id',
        'jumlah',
        'total_harga',
        'id_produk',
        'id_user'
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function transaksi()
    {
        return $this->belongsToMany(Transaksi::class, 'keranjang_transaksi');
    }
    
}
