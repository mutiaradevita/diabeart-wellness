<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index(){
        // $Keranjang = Keranjang::where('id_users', $user)->first();
        return view('keranjang');
    }
}
