<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kategori_Produk;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
    {
    //         $kategori = Kategori::orderBy('id', 'desc')->paginate(5);
    //         return view('kategori.index', compact('kategori'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);

    if($request->has('nama_kategori')) {
        $nama_kategori = request('nama_kategori');
        $kategori = Kategori::where('nama_kategori', 'like', '%'.$nama_kategori.'%')->paginate(10);
        return view('kategori.index', compact('kategori'));
    } else {
        $kategori = Kategori::orderBy('id', 'desc')->paginate(5);
        return view('kategori.index', compact('kategori'))
        ->with('i', (request()->input('page', 1) - 1) * 5); 
    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new Kategori;
        $kategori->nama_kategori = $request->get('nama_kategori');
        $kategori->save();
        Kategori::create($request->all());
        return redirect()->route('kategori')
         ->with('success', 'Kategori Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        ///menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $produk = Kategori_Produk::where('produk',$id);
        return view('kategori.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id untuk diedit
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            //melakukan validasi data
            $request->validate([
            'id' => 'required',
            'nama_kategori' => 'required',
            ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            Kategori::find($id)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('kategori.index')
              ->with('success', 'Kategori Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Kategori::find($id)->delete();
        return redirect()->route('kategori.index')
        -> with('success', 'Kategori Berhasil Dihapus');
    }
}
