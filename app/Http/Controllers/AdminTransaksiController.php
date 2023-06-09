<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminTransaksiController extends Controller
{
    public function index(){
        $transaksi = Transaksi::orderBy('tanggal', 'desc')->get();
        return view('dashboard.transaksi.index', compact('transaksi'));
    }

    public function update(Request $request, $id){
        $transaksi = Transaksi::find($id);
        $transaksi->status = $request->get('status');
        $transaksi->save();

        return redirect()->back();
    }
}
