<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Produk;
use App\Models\Keranjang;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'Id_Transaksi',
        'Tanggal',
        'Metode_Pembayaran',
    ];
}
