@extends('layouts/main')

@section('container')




<div class="card mb-3 bg-warning" style="max-width: 970px;">
  <div class="row g-0">
    <div class="col-md-4">


      <!-- <div class="row">
    <div class="col-md-4"> -->

      <form class="p-4 p-md-5 border rounded-3 bg-dark text-white">
        <h2><span class="text-primary">Registration New Account's </span></h2><br>
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
        <!-- <h5 class="card-title">Let's Join To Have Free Fun</h5><br> -->
        <p class="card-images"><img src="7457.jpg" class="card-img" alt="image regis" style="height: 540px;"></p>
        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
  </div>
</div>



@endsection