<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;


class HistoryController extends Controller
{
    public function index(){
        $user = Auth::user();
        
        $transaksi = Transaksi::where('id_users', $user->id)->orderBy('tanggal', 'desc')->get();
        return view('history', compact('transaksi', 'user'));
    }

    public function filter(Request $request){

        $request->validate([
            'status' => 'required',
        ]);

        $user = Auth::user();
        $transaksi = Transaksi::where('id_users', $user->id)->where('status', $request->get('status'))->orderBy('tanggal', 'desc')->get();
        return view('history', compact('transaksi', 'user'));
    }

    public function cetak(Request $request){
        $transaksi = Transaksi::find($request->get('id'));

        $pdf = PDF::loadview('cetakNotaTransaksi', ['transaksi' => $transaksi]);
        return $pdf->stream();
        // return view('cetakNotaTransaksi', compact('transaksi'));
    }
}
