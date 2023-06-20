<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Carbon\Carbon;

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

        $request->validate([
            'status' => 'required',
        ]);

        $transaksi = Transaksi::find($id);
        $transaksi->status = $request->get('status');
        $transaksi->save();

        return redirect()->back();
    }

    public function readKeranjang(Request $request){
        $invoice = $request->input('invoice');
        $transaksi = Transaksi::Where('invoice', $invoice)->first();
        
        $keranjang = $transaksi->keranjang;

        return view('dashboard.transaksi.keranjang', compact('keranjang'));
    }

    public function cetak(Request $request)
    {
        $tanggal = Carbon::now();
        if($request->get('tanggal') == 'all'){
            $transaksi = Transaksi::all();
        } elseif($request->get('tanggal') == 'hari'){
            $tanggalSekarang = $tanggal->copy()->now()->format('Y-m-d H:i:s');
            $tanggalMulai = $tanggal->copy()->subDays(1)->format('Y-m-d H:i:s');
            $transaksi = Transaksi::whereBetween('tanggal', [$tanggalMulai, $tanggalSekarang])->orderBy('tanggal', 'desc')->get();
        } elseif($request->get('tanggal') == 'minggu'){
            $tanggalSekarang = $tanggal->copy()->now()->format('Y-m-d H:i:s');
            $tanggalMulai = $tanggal->copy()->subWeeks(1)->format('Y-m-d H:i:s');
            $transaksi = Transaksi::whereBetween('tanggal', [$tanggalMulai, $tanggalSekarang])->orderBy('tanggal', 'desc')->get();
        } elseif($request->get('tanggal') == 'bulan'){
            $tanggalSekarang = $tanggal->copy()->now()->format('Y-m-d H:i:s');
            $tanggalMulai = $tanggal->copy()->subMonths(1)->format('Y-m-d H:i:s');
            $transaksi = Transaksi::whereBetween('tanggal', [$tanggalMulai, $tanggalSekarang])->orderBy('tanggal', 'desc')->get();
        } else{
            $tanggalSekarang = $tanggal->copy()->now()->format('Y-m-d H:i:s');
            $tanggalMulai = $tanggal->copy()->subYears(1)->format('Y-m-d H:i:s');
            $transaksi = Transaksi::whereBetween('tanggal', [$tanggalMulai, $tanggalSekarang])->orderBy('tanggal', 'desc')->get();
        }

        $totalPendapatan = $transaksi->where('status', 'done')->sum('total');
        

        $pdf = PDF::loadview('dashboard.transaksi.cetakLaporan', compact('transaksi', 'totalPendapatan'))->setPaper('A4', 'landscape');;
        return $pdf->stream();
        // return view('dashboard.transaksi.cetakLaporan', compact('transaksi', 'totalPendapatan'));
    }



    // public function destroy($id)
    // {
    //     $transaksi = Transaksi::findOrFail($id);

    //     // Ambil semua keranjang yang terkait dengan transaksi
    //     $keranjangs = $transaksi->keranjang;

    //     // Detach dan hapus keranjang satu per satu
    //     foreach ($keranjangs as $keranjang) {
    //         $keranjang->transaksi()->detach();
    //         $keranjang->delete();
    //     }

    //     // Hapus entri pada tabel pivot (keranjang_transaksi)
    //     $transaksi->keranjang()->detach();

    //     // Hapus transaksi
    //     $transaksi->delete();

    //     return redirect()->route('dashboard.transaksi');
    // }


}
