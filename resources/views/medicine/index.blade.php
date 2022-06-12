<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicines List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> -->
  
@extends('layouts.conquer2')
@section('content')
<div class="container">

        <div class="flex-center position-ref full-height">
            <li>
                <a href="#">Welcome</a>
            </li>
            <li >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" onclick="showInfo()">
                <i class="icon-bulb"></a></i>
            </li>
            <!-- </ul> -->
        </div>   		
        <div id='showinfo'>

        </div>
  
  <h2>Medicines List</h2>
  <h4 class="text-center">Table List</h1>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Generic Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Description</th>
        <th>Faskes TK 1</th>
        <th>Faskes TK 2</th>
        <th>Faskes TK 3</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listMedicines as $li)
        <tr>
            <td>{{ $li->generic_name }}</td>
            <td>{{ $li->form }}</td>
            <td>{{ $li->restriction_formula }}</td>
            <td>{{ $li->description }}</td>
            <td>{{ $li->faskes_tk1 }}</td>
            <td>{{ $li->faskes_tk2 }}</td>
            <td>{{ $li->faskes_tk3 }}</td>
            <td>
              <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" 
                data-toggle="modal">{{ $li->generic_name }}</a>  

              <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">{{$li->generic_name}}</h4>
                    </div>
                    <div class="modal-body">
                      <img src="{{ asset('img/'.$li->image) }}" height='200px'/>
                    </div>
	                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </td>
            <td>
              <a href="{{url('obat/'.$li->id.'/edit')}}" 
              class="btn btn-xs btn-info">Edit</a>
              <form method="POST" action="{{url('obat/'.$li->id)}}">
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
  <br><br>
  <h4 class="text-center">Grid Pictures</h1>
  <h6>Analgesik Non Narkotik</h6>
  <br>
  <div class="container">
  <div class="row">
    @foreach($listMedCategory as $li)
    <div class="col-sm">        
        <img src="{{ asset('img/'.$li->image) }}" width="250" height="250">
        <p>{{ $li->generic_name }}</p>
    </div>
    @endforeach
  </div>
 </div>
</div>
        @section('javascript')
        <script>
        function showInfo()
        {
            $.ajax({
            type:'POST',
            url:'/medicines/showInfo',
            data:'_token=<?php echo csrf_token() ?>',
            success: function(data){
                $('#showinfo').html(data.msg)
            }
            });
        }
        </script>
        @endsection
@endsection
<!-- 
</body>
</html> -->
