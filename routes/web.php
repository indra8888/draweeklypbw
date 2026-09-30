<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Burada uygulamanız için web rotalarını kaydettiğiniz yer.
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home",
    ]);
});

// 2. Profile Rotası (http://127.0.0.1:8000/profile)
Route::get('/profile', function () {
    return view('profile', [
        "tittle" => "Profile",
        "name" => "Indra nur wahyu saputra",
        "nim" => "13242520026",
        "prodi" => "Teknologi Informasi",
        "foto" => "images/foto.jpg"
    ]);
});

// 3. Berita Rotası
Route::get('/berita', function () {
    return view('berita', [
        "tittle" => "Berita",
        "name" => "Indra nur wahyu saputra",
        "nim" => "13242520026",
        "prodi" => "Teknologi Informasi",
        "foto" => "images/foto.jpg"
    ]);
});

// 4. Contact Rotası
Route::get('/contact', function () {
    return view('contact');
});