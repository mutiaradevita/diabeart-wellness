<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailProdukController extends Controller
{
    public function index($nama)
    {
        $detail = Produk::where('nama', $nama)->first();
        $idproduk = $detail->id;
        $ulasan = Ulasan::where('id_produk', $idproduk)->orderBy('rating', 'desc')->limit(5)->get();
        return view('detail', compact('detail', 'ulasan'));
    }

    public function create(Request $request, $harga, $idproduk)
    {
        $iduser = Auth::user()->id;
        $jumlah = $request->get('jumlah');
        $status = $request->get('status');
        $catatan = $request->get('catatan');

        $keranjang = new Keranjang;
        $keranjang->jumlah = $jumlah;
        $keranjang->total_harga = $harga * $jumlah;
        if ($catatan == null) {
            $catatan = 'Tidak ada catatan';
            $keranjang->catatan = $catatan;
        } else {
            $keranjang->catatan = $catatan;
        }
        $keranjang->status = $status;
        $keranjang->id_produk = $idproduk;
        $keranjang->id_users = $iduser;
        $keranjang->save();
        return redirect()->route('produk');
    }
}
