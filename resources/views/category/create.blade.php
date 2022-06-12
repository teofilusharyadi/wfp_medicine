@extends('layouts.conquer2')
@section('content')
<div class="container">
  <h2>Tambah Kategori</h2>
  <form action="{{ route('kategori_obat.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="namaKategori">Nama Kategori:</label>
      <input type="text" class="form-control" id="nama" placeholder="Input nama" name="nama">
    </div>
    <div class="form-group">
      <label for="deskripsiKat">Deskripsi:</label>
      <!-- <input type="text" class="form-control" id="desc" placeholder="Input deskripsi" name="desc"> -->
      <textarea name="desc" id="desc" class="form-control" rows="3" placeholder="Input deskripsi">

      </textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection