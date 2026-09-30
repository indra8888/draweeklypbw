<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
</head>
<body>

    <div class="profile-info">
        <h1>Halaman Profile</h1>
        <p>Nama : {{ $name }}</p>
        <p><span>NIM:</span> {{ $nim }}</p>
        <p><span>Prodi:</span> {{ $prodi }}</p>
        <img src="{{ asset($foto) }}" width="200px" alt="Foto Profil" />
    </div>

</body>
</html>