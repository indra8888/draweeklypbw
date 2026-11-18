@extends("layouts.main") 

@section("konten")
     <div class="container mt-5"> 
         <h3>Data mahasiswa</h3>
         <button type="button" class="btn btn-primary">tambah data</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Prodi</th>
      <th scope="col">Email</th>
      <th scope="col">No.hp</th>
      <th scope="col">foto</th>
      <th scope="col">aksi</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>aul</td>
      <td>13242520022</td>
      <td>Teknologi informasi</td>
      <td>aul@gmail.com</td>
      <td>0825687853886</td>
      <td>foto</td>
      <td>
        <button type="button" class="btn btn-warning">edit</button>
        <button type="button" class="btn btn-danger">hapus</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>J</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>fat@gmail.com</td>
      <td>0825687853887</td>
      <td>foto2</td>
      <td>
        <button type="button" class="btn btn-warning">edit</button>
        <button type="button" class="btn btn-danger">hapus</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
      <td>social@gmail.com</td>
      <td>0825687853888</td>
      <td>foto3</td>
      <td>
        <button type="button" class="btn btn-warning">edit</button>
        <button type="button" class="btn btn-danger">hapus</button>
      </td>
    </tr>
  </tbody>
</table>
@endsection 