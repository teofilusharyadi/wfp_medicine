@extends('layouts.conquer2')
@section('content')
<div class="container">
  <h2>Edit Kategori</h2>
  <form role="form" method="POST" action="{{url('kategori_obat/'.$category->id)}}">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="namaKategori">Nama Kategori:</label>
      <input type="text" class="form-control" id="nama" placeholder="Input nama" name="nama"
      value="{{$category->name}}">
    </div>
    <div class="form-group">
      <label for="deskripsiKat">Deskripsi:</label>
      <!-- <input type="text" class="form-control" id="desc" placeholder="Input deskripsi" name="desc"> -->
      <textarea name="desc" id="desc" class="form-control" rows="3" placeholder="Input deskripsi" >
        {{$category->description}}
      </textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection