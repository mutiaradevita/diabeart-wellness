<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $Keranjang = Keranjang::where('id_users', $user->id)->get();
        // $Keranjang = Keranjang::all();
        return view('keranjang', compact('Keranjang'));
    }
}
