<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'tanggal',
        'metode_pembayaran',
        'id_users',
        'id_produk',
        'id_keranjang',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function keranjang()
    {
        return $this->belongsToMany(Keranjang::class, 'keranjang_transaksi');
    }

}
