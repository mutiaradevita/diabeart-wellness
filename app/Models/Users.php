<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'no_hp',
        'alamat',
        'image_user',
        'keranjang',
        'ulasan',
    ];

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
    
    public function ulasan(){
        return $this->hasOne(Ulasan::class);
    }
}
