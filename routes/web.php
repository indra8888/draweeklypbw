<?php

use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Indra Nur Wahyu Saputras",
        "nim" => "13242520026",
        "prodi" => "Teknologi Informasi",
        "gambar" => "11.....",
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita']);
Route ::get('/berita/{slug}',[BeritaController::class, 'tampilberita']);




Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});