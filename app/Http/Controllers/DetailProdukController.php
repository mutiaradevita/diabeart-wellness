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
        $ulasan = Ulasan::where('id_produk', $idproduk)->orderBy('id', 'desc')->get();
        $creview = $ulasan->count();
        $avgrating = number_format($ulasan->avg('rating'), 2);
        return view('detail', compact('detail', 'ulasan', 'creview', 'avgrating'));
    }

    public function create(Request $request, $harga, $idproduk)
    {
        $iduser = Auth::user()->id;
        $jumlah = $request->get('jumlah');
        $status = $request->get('status');
        $ulasan = $request->get('ulasan');
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
        $keranjang->ulasan = $ulasan;
        $keranjang->id_produk = $idproduk;
        $keranjang->id_users = $iduser;
        $keranjang->save();
        return redirect()->route('produk')->with('success', 'Produk dimasukkan ke Keranjang');
    }
}
