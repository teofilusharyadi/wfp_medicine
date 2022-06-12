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

        <!-- <div class="flex-center position-ref full-height">
            <li>
                <a href="#">Welcome</a>
            </li>
            <li >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" onclick="showInfo()">
                <i class="icon-bulb"></a></i>
            </li> -->
            <!-- </ul> -->
        <!-- </div>   		
        <div id='showinfo'>

        </div> -->
  
  <h2>Daftar Transaksi</h2>
  <!-- <h4 class="text-center">Table List</h1>          -->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pembeli</th>
        <th>Kasir</th>
        <th>Tanggal Transaksi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listTransaction as $li)
        <tr>
            <td>{{ $li->id }}</td>
            <td>{{ $li->buyer->name }}</td>
            <td>{{ $li->user->name }}</td>
            <td>{{ $li->transaction_date }}</td>
            <td>
              <a class="btn btn-default" data-toggle="modal" href="#basic" 
                onclick="getDetailData();" >Lihat Rincian Pembelian</a>  
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <br><br>
</div>
        @section('javascript')
        <script>
        function getDetailData(id)
        {
            $.ajax({
              type:'POST',
              url:'{{route("transaction.showAjax")}}',
              data:'_token=<?php echo csrf_token() ?> &id='+id,
              success: function(data){
                $('#msg').html(data.msg)
              }
            });
        }
        </script>
        @endsection
@endsection
<!-- 
</body>
</html> -->
