@extends('layouts/main')

@section('container')



<div class="row">
    <div class="col-md-4">
    <h1>Register <span class="text-primary">New</span> Account's</h1><br>
<form class="p-4 p-md-5 border rounded-3 bg-light">
  <div class="mb-3">
    <label for="Name" class="form-label">Create New Name</label>
    <input type="Name" class="form-control" id="Name">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="Username" class="form-label">Create Username</label>
    <input type="Username" class="form-control" id="Username">
  </div>
  <div class="mb-3">
    <label for="PasswordI" class="form-label">Create New Password</label>
    <input type="password" class="form-control" id="PasswordI"> 
  </div>
  <div class="mb-3">
    <label for="PasswordII" class="form-label">Enter New Password</label>
    <input type="password" class="form-control" id="PasswordII">
  </div>
  <a href="" class="btn btn-primary">Register</a>
  <!-- <button type="submit" class="btn btn-primary">Register</button> -->
</form>
</div>
</div>

@endsection