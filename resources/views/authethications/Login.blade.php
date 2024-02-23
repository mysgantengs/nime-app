@extends('layouts/main')

@section('container')



<div class="row">
    <div class="col-md-4">
    <h1><span class="text-primary">Login</span></h1><br>
<form class="p-4 p-md-5 border rounded-3 bg-light">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <a href="" class="btn btn-primary">Log-In</a><br><br>
  <!-- <button type="submit" class="btn btn-primary">Log-In</button><br><br> -->
  <a href="" class="text-decoration-none">Forgot Password</a>

</form>
</div>
</div>


@endsection