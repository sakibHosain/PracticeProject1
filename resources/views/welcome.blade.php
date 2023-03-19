<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style='text-align:center; margin:20px;'>Students Database</h2> 
  <a href="{{route('create.student')}}" class='btn btn-primary'style='float:right; margin-bottom:10px;'>ADD Student</a>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Registration No</th>
        <th>Mobile No</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($students as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->Name}}</td>
        <td>{{$data->Roll}}</td>
        <td>{{$data->Registration_No}}</td>
        <td>{{$data->Mobile_No}}</td>
        <td>{{$data->Address}}</td>
        <td>
            <a href="{{route('edit.student', $data->id)}}" class='btn btn-success'>EDIT</a>
            <a href="{{route('delete.student', $data->id)}}" class='btn btn-danger'>DELETE</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
