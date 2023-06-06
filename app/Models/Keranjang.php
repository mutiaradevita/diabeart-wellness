<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = "keranjang";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'id',
        'jumlah',
        'total_harga',
        'id_produk',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'id_users');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function transaksi()
    {
        return $this->belongsToMany(Transaksi::class, 'keranjang_transaksi');
    }
    
}
