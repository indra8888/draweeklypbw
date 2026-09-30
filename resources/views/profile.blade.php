@extends('layouts.main')
       
@section('content')
        <h1>Profile Page</h1>
        
        <div class="profile-info">
            <p>Nama :  {{ $nama }}</p>
            <p>Nim : {{ $nim }}</p>
            <p>Prodi: {{ $prodi }}</p>
            <img src="{{ $image }}" alt="Foto Profil" width="200px">
        </div>
    </div>

</body>
</html>