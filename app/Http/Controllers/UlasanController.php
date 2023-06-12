<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $iduser = Auth::user()->id;
            $transaksi = Transaksi::where('id_users', $iduser)->where('status', 'done')->get();
            return view('ulasan', compact('transaksi'));
        } else {
            return view('ulasan');
        }
    }

    public function create(Request $request, $idproduk){
        $iduser = Auth::user()->id;
        $ulasan = new Ulasan;
        $ulasan->rating = $request->get('rating');
        $ulasan->komentar = $request->get('komentar');
        $ulasan->id_users = $iduser;
        $ulasan->id_produk = $idproduk;
        $ulasan->save();
        return redirect()->route('ulasan');
    }
}
