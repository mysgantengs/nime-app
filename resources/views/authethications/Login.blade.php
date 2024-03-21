@extends('layouts/main')

@section('container')


<div class="card mb-3 bg-warning bg-warning" style="max-width: 970px;">
  <div class="row g-0">
    <div class="col-lg-4">

      <!-- <div class="row">
    <div class="col-md-4"> -->
      <form class="p-4 p-md-5 border rounded-3 bg-dark text-white" style="height: 475px">
        <h2><span class="text-primary">Login</span></h2><br>
        <div class="mb-3">
          <label for="username" class="form-label"><span class="text-danger">Username</span></label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label"><span class="text-danger">Password</span></label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <a href="" class="btn btn-primary">Log-In</a><br><br>
        <!-- <button type="submit" class="btn btn-primary">Log-In</button><br><br> -->
        <a href="" class="text-decoration-none">Forgot Password? update to password</a>

      </form>
      <!-- </div>
</div> -->

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <!-- <h5 class="card-title">Card title</h5> -->
        <p class="card-text"><img src="7475.jpg" class="card-img" alt="image login" style="height: 440px;"></p>
        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
  </div>
</div>







@endsection