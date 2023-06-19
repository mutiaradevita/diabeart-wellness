<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index(Request $request)
    {
        $ulasan = Ulasan::where('rating', '!=', null)
                        ->when($request->rating, function ($query) use ($request) {
                            return $query->whereRating($request->rating);
                        })
                        ->when($request->id_produk, function ($query) use ($request) {
                            return $query->whereIdProduk($request->id_produk);
                        })
                        ->orderBy('id', 'desc')
                        ->paginate(5);

        $produk = Produk::all();
        
        return view('dashboard.review', compact('ulasan', 'produk'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id)
    {    
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->komentar = $request->get('komentar');
        $ulasan->save();

        return redirect()->route('review.index');
    }

    public function show($id)
    {
        $ulasan = Ulasan::find($id);

        return view('dashboard.review_detail', compact('ulasan'));
    }

}