<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        
        $user = Auth::user();

        $Keranjang = Keranjang::where('id_users', $user->id)->where('status', 'process')->get();
        $totalSemua = 0;
        foreach ($Keranjang as $keranjang) {
            // Lakukan tindakan pada setiap produk
            $totalPrice = $keranjang->total_harga;
            $totalSemua = $totalSemua + $totalPrice;
        }

        return view('checkout', compact('user', 'Keranjang', 'totalSemua'));
    }
}
