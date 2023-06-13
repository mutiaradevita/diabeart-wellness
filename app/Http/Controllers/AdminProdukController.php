<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class AdminProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $Produk = Produk::where([
            ['nama', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('nama', 'LIKE', '%' . $search . '%')
                        ->get();
                }
            }]
        ])->orderBy('nama', 'desc')->paginate(5);
        // $currentPage = $produk->currentPage();
        // $hasMorePages = $produk->hasMorePages();
        // $nextPage = $produk->nextPageUrl();
        // $prevPage = $produk->previousPageUrl();
        
        $kategori = Kategori::all();
        return view('dashboard.product', compact('kategori', 'Produk'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('images', 'public');
        }

        $produk = new Produk;
        $produk->nama = $request->get('nama');
        $produk->gambar = $gambar;
        $produk->deskripsi = $request->get('deskripsi');
        $produk->harga = $request->get('harga');
        $produk->komposisi = $request->get('komposisi');
        $produk->karbo = $request->get('karbo');
        $produk->protein = $request->get('protein');
        $produk->kalori = $request->get('kalori');
        $produk->serat = $request->get('serat');
        $produk->save();

        $kategoris = $request->get('kategoris');
        foreach ($kategoris as $kat) {
            $kats = Kategori::findOrFail($kat);
            $produk->kategori()->attach($kats->id);
            $kats->save();
        }
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
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        if ($produk->gambar && file_exists(storage_path('app/public/' . $produk->gambar))) {
            Storage::delete('public/' . $produk->gambar);
        }
        $gambar = $request->file('gambar')->store('images', 'public');
        $produk->gambar = $gambar;

        $produk->nama = $request->get('nama');
        $produk->deskripsi = $request->get('deskripsi');
        $produk->harga = $request->get('harga');
        $produk->komposisi = $request->get('komposisi');
        $produk->karbo = $request->get('karbo');
        $produk->protein = $request->get('protein');
        $produk->kalori = $request->get('kalori');
        $produk->serat = $request->get('serat');
        $produk->save();

        $kategoris = $request->get('kategoris');
        $produk->kategori()->sync($kategoris);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // Detach all kategori
        $produk->kategori()->detach();

        // Delete the produk
        $produk->delete();

        return redirect()->route('product.index');
    }
}
