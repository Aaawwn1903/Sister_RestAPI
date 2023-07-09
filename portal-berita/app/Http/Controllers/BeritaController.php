<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
{
    $beritas = Berita::all();
    return response()->json($beritas);
}

public function store(Request $request)
{
    $berita = new Berita();
    $berita->judul = $request->judul;
    $berita->konten = $request->konten;
    $berita->save();

    return response()->json($berita, 201);
}

// Tambahkan metode lainnya seperti show(), update(), dan delete() sesuai kebutuhan

}
