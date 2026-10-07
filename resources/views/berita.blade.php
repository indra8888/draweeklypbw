@extends('layouts.main')

@section('contet')
    <div class="container mt-4 text-start">
        @foreach ($beritas as $berita)
            <h2><a href="berita/{{ $berita['slug'] ?? '#' }}" class="text-decoration-none">{{ $berita['judul'] }}</a></h2>
            <h5><a href="berita/{{ $berita['slug'] ?? '#' }}" class="text-decoration-none text-muted">{{ $berita['penulis'] }}</a></h5>
            <p>{{ $berita['contet'] ?? $berita['isi'] }}</p>
        @endforeach
    </div>
@endsection