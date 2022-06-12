<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicine Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Medicine Detail</h2>
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
        <tr>
            <td>{{ $msg->generic_name }}</td>
            <td>{{ $msg->form }}</td>
            <td>{{ $msg->restriction_formula }}</td>
            <td>{{ $msg->description }}</td>
            <td>{{ $msg->faskes_tk1 }}</td>
            <td>{{ $msg->faskes_tk2 }}</td>
            <td>{{ $msg->faskes_tk3 }}</td>
        </tr>
    </tbody>
  </table>
  
</div>

</body>
</html>
