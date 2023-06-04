<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        if($user != null){
            $Keranjang = Keranjang::where('id_users', $user->id)->get();
            return view('keranjang', compact('Keranjang'));
        } else{
            return view('keranjang');
        }
    }

    public function destroy($id)
    {
        Keranjang::where('id', $id)->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Dihapus!.',
        ]);
    }
}
