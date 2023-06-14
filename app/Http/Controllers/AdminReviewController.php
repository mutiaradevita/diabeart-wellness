<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index(){
        $ulasan = Ulasan::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.review', compact('ulasan'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function update(Request $request, $id)
    {
        // Ulasan::find($id)->delete();
        // return redirect()->route('dashboard.review')
        //     ->with('success', 'Review Berhasil Dihapus');
        
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->komentar = $request->get('komentar');
        $ulasan->save();

        return redirect()->route('dashboard.review');


    }
}