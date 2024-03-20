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
          <label for="name" class="form-label"><span class="text-danger">Create New Name</span></label>
          <input type="name" class="form-control" name="name" id="name" placeholder="New Name">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label"><span class="text-danger">Create Username</span></label>
          <input type="username" class="form-control" name="username" id="username" placeholder="Create Username">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label"><span class="text-danger">Enter Email</span></label>
          <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label"><span class="text-danger">Enter Password</span><label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
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