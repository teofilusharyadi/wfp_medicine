@extends('layouts.conquer2')
@section('content')
<div class="container">
  <h2>Tambah Obat</h2>
  <form action="{{ route('obat.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="namaKategori">Nama Obat:</label>
      <input type="text" class="form-control" id="nama" placeholder="Input nama" name="nama">
    </div>
    <div class="form-group">
      <label for="namaKategori">Form:</label>
      <input type="text" class="form-control" id="form" placeholder="Input form" name="form">
    </div>
    <div class="form-group">
      <label for="namaKategori">Restriction Formula:</label>
      <input type="text" class="form-control" id="res" placeholder="Input restriction formula" name="res">
    </div>
    <div class="form-group">
      <label for="deskripsiKat">Deskripsi:</label>
      <!-- <input type="text" class="form-control" id="desc" placeholder="Input deskripsi" name="desc"> -->
      <textarea name="desc" id="desc" class="form-control" rows="3" placeholder="Input deskripsi">

      </textarea>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="tk1" name="tk1">
        <label class="form-check-label" for="defaultCheck1">
            Fasilitas Kesehatan Tingkat 1
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="tk2" name="tk2">
        <label class="form-check-label" for="defaultCheck1">
            Fasilitas Kesehatan Tingkat 2
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="tk3" name="tk3">
        <label class="form-check-label" for="defaultCheck1">
            Fasilitas Kesehatan Tingkat 3
        </label>
    </div><br>
    <div class="form-group col-md-4">
      <label for="inputState">Kategori</label>
      <select id="inputState" class="form-control">
        @foreach($listCategory as $li)
        <option>{{ $li->name }}</option>
        @endforeach
      </select>
    </div>
    
    <br><br><br><br><br><button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection