
@extends('layouts.conquer2')
@section('content')
<div class="container">
  
  <h2>Categories List</h2>
  <div class="page-toolbar">
    <a href="#modalCreate" data-toggle="modal" class="btn btn-info">Tambah Supplier (Modal)</a>
  </div>
  <!--Modal-->
  <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" >
        <form role="form" action="{{ route('kategori_obat.store') }}" method="POST">
        <div class="modal-header">
          <button type="button" class="close" 
                    data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">Tambah Kategori</h4>
        </div>
        <div class="modal-body">
        <div class="container">
          
          @csrf
          <div class="form-body">
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
          </div>
          
    
          
          
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>
    </div>
 </div>

 <div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="modalContent">

        <div style="text-align:center">
          <img src="{{asset('img/loading.gif')}}">
        </div> 


      </div>
    </div>
 </div>
 <!--End Modal-->
  <h4 class="text-center">Table List</h1>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category Name</th>
        <th>Description</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listCategories as $li)
        <tr id="tr_{{$li->id}}">
            <td>{{ $li->id }}</td>
            <td id="td_nama_{{$li->name}}">{{ $li->name }}</td>
            <td id="td_desc_{{$li->name}}">{{ $li->description }}</td>
            <td>
              <a href="{{url('kategori_obat/'.$li->id.'/edit')}}" 
              class="btn btn-xs btn-info">Edit</a>
              <a href="#modalEdit" data-toggle="modal" class="btn btn-xs btn-warning" 
              onclick="getEditForm({{ $li->id }})">
                Edit A
              </a>
              <a href="#modalEdit" data-toggle="modal" class="btn btn-xs btn-warning" 
              onclick="getEditForm2({{ $li->id }})">
                Edit B
              </a>
              <a class="btn btn-xs btn-danger" 
              onclick="if(confirm('are you sure to delete this record?'))deleteDataRemoveTR({{ $li->id }})">
                Delete 2
              </a>
            <form method="POST" action="{{url('kategori_obat/'.$li->id)}}">
              @csrf
              @method('DELETE')
              <input type="submit" value="delete" class="btn btn-danger btn-xs"
              onclick="if(!confirm('Are you sure to delete this data?')) return false;">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  
</div>
@endsection

@section('javascript')
<script>
function getEditForm(id){
  $.ajax({
    type:'POST',
    url:'{{route("kategori_obat.getEditForm")}}',
    data:{
      '_token':'<?php echo csrf_token() ?>',
      'id':id
    },
    success: function(data){
      $('#modalContent').html(data.msg)
    }
  });
}

function getEditForm2(id){
  $.ajax({
    type:'POST',
    url:'{{route("kategori_obat.getEditForm2")}}',
    data:{
      '_token':'<?php echo csrf_token() ?>',
      'id':id
    },
    success: function(data){
      $('#modalContent').html(data.msg)
    }
  });
}

function saveDataUpdateTD(id){
  var eNama = $('#eNama').val()
  var eDesc = $('#eDesc').val()
  $.ajax({
    type:'POST',
    url:'{{route("kategori_obat.saveData")}}',
    data:{
      '_token':'<?php echo csrf_token() ?>',
      'id':id,
      'name':eNama,
      'description':eDesc
    },
    success: function(data){
      if(data.status=="oke"){
        alert(data.msg);
        $('#td_nama_'+id).html(eNama);
        $('#td_desc_'+id).html(eDesc);
      }
    }
  });
}

function deleteDataRemoveTR(id){
  $.ajax({
    type:'POST',
    url:'{{route("kategori_obat.deleteData")}}',
    data:{
      '_token':'<?php echo csrf_token() ?>',
      'id':id
    },
    success: function(data){
      if(data.status=="ok"){
        alert(data.msg);
        $('#tr_'+id).remove();
      } else {
        alert(data.msg);
      }
    }
  });
}
</script>
@endsection

