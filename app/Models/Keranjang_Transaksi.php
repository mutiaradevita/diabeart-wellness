<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang_Transaksi extends Model
{
    use HasFactory;

    protected $table = 'keranjang_transaksi';
    protected $primaryKey = ['id_keranjang', 'id_transaksi'];
    public $incrementing = false;
}
