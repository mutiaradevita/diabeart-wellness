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

    public function kategori($kategori){
        $Kategori = Kategori::where('nama_kategori', $kategori)->first();
        $idkategori = $Kategori->id;
        $produk = Kategori_Produk::where('id_kategori', $idkategori)->get();
        return view('produk_kat', compact('produk', 'kategori'));
    }
}
