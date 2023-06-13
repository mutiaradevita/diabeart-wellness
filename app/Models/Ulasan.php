<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'rating',
        'komentar',
        'id_users',
        'id_produk',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }


}
