<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class AdminTransaksiController extends Controller
{
    public function index(Request $request){

            $transaksi = Transaksi::where([
                ['status', '!=', Null],
                [function ($query) use ($request) {
                    if (($search = $request->search)) {
                        $query->orWhere('status', 'LIKE', '%' . $search . '%')->orWhere('tanggal', 'LIKE', '%' . $search . '%')
                            ->get();
                    }
                }]
            ])->orderBy('tanggal', 'desc')->paginate(5);
        
        return view('dashboard.transaksi.index', compact('transaksi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id){
        $transaksi = Transaksi::find($id);
        $transaksi->status = $request->get('status');
        $transaksi->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        // Ambil semua keranjang yang terkait dengan transaksi
        $keranjangs = $transaksi->keranjang;

        // Detach dan hapus keranjang satu per satu
        foreach ($keranjangs as $keranjang) {
            $keranjang->transaksi()->detach();
            $keranjang->delete();
        }

        // Hapus entri pada tabel pivot (keranjang_transaksi)
        $transaksi->keranjang()->detach();

        // Hapus transaksi
        $transaksi->delete();

        return redirect()->route('dashboard.transaksi');
    }


}
