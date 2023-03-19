<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align:center; margin:20px">@if (@$editdata)
      Edit Students Data
      @else
      Add Student
  @endif</h2>
  
  <form class="form-group" action="{{$editdata? route('update.student',$editdata->id):route('store.student')}}" method="POST">
    @csrf
    <label for="email2" class="mb-2 mr-sm-2 ">Name</label>
    <input type="text" class="form-control" id="email2" placeholder="Enter full name" name="name" value="{{$editdata? $editdata->Name:''}}">
    <label for="pwd2" class="mb-2 mr-sm-2">Roll</label>
    <input type="text" class="form-control" id="pwd2" placeholder="Enter roll" name="roll" value="{{$editdata? $editdata->Roll:''}}">
    <label for="pwd2" class="mb-2 mr-sm-2">Registration No</label>
    <input type="text" class="form-control" id="pwd2" placeholder="Enter Registration No" name="reg" value="{{$editdata? $editdata->Registration_No:''}}">
    <label for="pwd2" class="mb-2 mr-sm-2">Mobile No</label>
    <input type="text" class="form-control" id="pwd2" placeholder="Enter Mobile No" name="mobile" value="{{$editdata? $editdata->Mobile_No:''}}">
    <label for="pwd2" class="mb-2 mr-sm-2">Address</label>
    <input type="text" class="form-control" id="pwd2" placeholder="Enter full address" name="address" value="{{$editdata? $editdata->Address:''}}">
    <button type="submit" class="btn btn-primary mb-2" style="margin:20px; float:right">
        @if (@$editdata)
        UPDATE STUDENT
        @else
        ADD STUDENT
        @endif
    </button>
  </form>
</div>

</body>
</html>
