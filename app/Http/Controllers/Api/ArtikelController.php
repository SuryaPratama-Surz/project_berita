<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{


    //function get artikel
    public function getArtikel()
    {
       $data_artikel = Artikel::all();
       return response()->json([
        'data' => $data_artikel,
       ]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

        $data_artikel = new Artikel();
        $data_artikel->judul = $request->judul;
        $data_artikel->isi = $request->isi;
        $data_artikel->id_kategori = $request->id_kategori;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/artikel', $name);
            $data_artikel->foto = $name;
        }

        $data_artikel->save();

        return response()->json([
            'success' => true,
            'message' => 'Berita berhasil ditambahkan',
        ], 201);

        
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
        //
    }
}
