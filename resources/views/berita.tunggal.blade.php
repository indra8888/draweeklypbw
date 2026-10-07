@extends('layouts.main')

@section('konten')
    <div class="container mt-5">
        <h1>INI HALAMAN BERITA TUNGGAL</h1>
        <p>Judul: {{ $berita['judul'] ?? 'Tidak ada judul' }}</p>
        <p>Penulis: {{ $berita['penulis'] ?? 'Tidak ada penulis' }}</p>
        <hr>
        <p>{{ $berita['isi'] ?? 'Tidak ada isi berita' }}</p>
    </div>
@endsection 