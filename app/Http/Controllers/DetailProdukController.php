<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function index($nama){
        $detail = Produk::where('nama', $nama)->first();
        $jumlah = 1;
        return view('detail', compact('detail', 'jumlah'));
    }

    public function create(Request $request, $harga, $idproduk, $iduser){
        $jumlah = $request->get('jumlah');
        $keranjang = new Keranjang;
        $keranjang->jumlah = $jumlah;
        $keranjang->total_harga = $harga * $jumlah;
        $keranjang->id_produk = $idproduk;
        $keranjang->id_users = $iduser;
        $keranjang->save();
        return redirect()->route('home');
    }
}
