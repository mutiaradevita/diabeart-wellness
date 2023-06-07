<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index(){
        return view('transaksi');
    }

    public function create(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'metode_pembayaran' => 'required',
            'alamat' => 'required',
        ]);

        $user = Auth::user();

        $transaksi = new Transaksi;
        $transaksi->tanggal = $request->get('tanggal');
        $transaksi->metode_pembayaran = $request->get('metode_pembayaran');
        $transaksi->id_users = $user->id;
        $transaksi->alamat = $request->get('alamat');
        $transaksi->save();

        $keranjang = $request->get('keranjang');

        // Simpan semua data ke dalam pivot tabel
        foreach ($keranjang as $item) {
            $items = Keranjang::findOrFail($item);
            $transaksi->keranjang()->attach($items->id);
            $items->status = "done";
            $items->save();
        }

        return redirect()->route('transaksi');
    }
}
