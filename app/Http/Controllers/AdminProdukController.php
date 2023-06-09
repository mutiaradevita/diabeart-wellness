<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class AdminProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produk = Produk::where([
            ['nama', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('nama', 'LIKE', '%' . $search . '%')
                        ->get();
                }
            }]
        ])->paginate(5);
        return view('dashboard.product', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk;
        $produk->nama = $request->get('nama');
        $produk->gambar = $request->get('gambar');
        $produk->deskripsi = $request->get('deskripsi');
        $produk->harga = $request->get('harga');
        $produk->komposisi = $request->get('komposisi');
        $produk->karbo = $request->get('karbo');
        $produk->protein = $request->get('protein');
        $produk->kalori = $request->get('kalori');
        $produk->serat = $request->get('serat');
        $produk->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $produk = Produk::where('id', $id)->first();
        $produk->nama = $request->get('nama');
        $produk->gambar = $request->get('gambar');
        $produk->deskripsi = $request->get('deskripsi');
        $produk->harga = $request->get('harga');
        $produk->komposisi = $request->get('komposisi');
        $produk->karbo = $request->get('karbo');
        $produk->protein = $request->get('protein');
        $produk->kalori = $request->get('kalori');
        $produk->serat = $request->get('serat');
        $produk->save();
        return redirect()->route('product.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
