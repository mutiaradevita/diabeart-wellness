<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function index($nama){
        $detail = Produk::where('nama', $nama)->first();
        return view('detail', compact('detail'));
    }
}
