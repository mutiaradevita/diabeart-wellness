<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kategori_Produk;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('produk', compact('produk'));
    }
}
