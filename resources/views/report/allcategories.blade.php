<!DOCTYPE html>
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
<body>
  
@extends('layouts.conquer2')
  @section('content')
<div class="container">
  
  <h2>Categories List</h2>
  <h4 class="text-center">Table List</h1>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listMedicines as $li)
        <tr>
            <td>{{ $li->id }}</td>
            <td>{{ $li->name }}</td>
            <td>{{ $li->description }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  
</div>
@endsection

</body>
</html>
