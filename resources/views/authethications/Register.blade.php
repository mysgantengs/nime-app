@extends('layouts/main')

@section('container')




<div class="card mb-3" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">

    
<!-- <div class="row">
    <div class="col-md-4"> -->
   
<form class="p-4 p-md-5 border rounded-3 bg-light">
<h1>Register <span class="text-primary">New</span> Account's</h1><br>
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
<!-- </div>
</div> -->
  
    
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>



@endsection