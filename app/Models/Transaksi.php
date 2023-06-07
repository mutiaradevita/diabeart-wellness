<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Produk;
use App\Models\Keranjang;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'tanggal',
        'metode_pembayaran',
        'users',
        'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function keranjang()
    {
        return $this->belongsToMany(Keranjang::class, 'keranjang_transaksi','id_transaksi', 'id_keranjang');
    }
}
