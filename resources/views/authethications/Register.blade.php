@extends('layouts/main')

@section('container')



<div class="row">
    <div class="col-md-4">
    <h1>Register New Account's</h1><br>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Create New Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Create Username</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Create New Password</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>

@endsection