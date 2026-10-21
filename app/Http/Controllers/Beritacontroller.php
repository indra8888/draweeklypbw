<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampilberita()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::ambildata(),
        ]);
    }

    public function tampilberitatunggal($slug)
    {
        return view('beritatunggal', [
            "title" => Berita::getJudul($slug),
            "singlenews" => Berita::getBerita($slug),
        ]);
    }
}