<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa; // Import model mahasiswa

class MahasiswaController extends Controller
{
    /**
     * Menampilkan daftar semua mahasiswa
     */
    public function index()
    {
        // Mengambil seluruh data dari tabel mahasiswas
        $data = mahasiswa::all();

        // Mengirim data ke view 'datamahasiswa'
        return view('datamahasiswa', compact('data'));
    }
}