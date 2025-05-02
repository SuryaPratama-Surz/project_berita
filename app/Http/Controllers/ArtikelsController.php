<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;

class ArtikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        return view('artikel.index', compact('artikel' , 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('artikel.create' , compact('kategori'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'id_kategori' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:9000',
        ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->id_kategori = $request->id_kategori;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/artikel', $name);
            $artikel->foto = $name;
        }

        $artikel->save();

        return redirect()->route('artikel.index'    )->with('success', 'Artikel created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::findOrFail($id);
        if ($artikel->foto) {
            unlink(public_path('images/artikel/' . $artikel->gambar));
        }
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel deleted successfully.');
    }
}
