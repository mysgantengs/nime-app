@extends('layouts/main')

@section('container')




<div class="card mb-3 bg-warning" style="max-width: 970px; height: 580px">
  <div class="row g-0">
    <div class="col-md-4">


      <!-- <div class="row">
    <div class="col-md-4"> -->

      <form class="p-4 p-md-5 border rounded-3 bg-dark text-white" action="/register" method="post" style="height: 580px">
        <h2><span class="text-primary">Registration New Account's </span></h2><br>
        <div class="mb-3">
          <label for="name" class="form-label"><span class="text-danger">Create New Name</span></label>
          <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="New Name" value="{{ old('name') }}" required>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label"><span class="text-danger">Enter Email</span></label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter Email" value="{{ old('email') }}" required>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label"><span class="text-danger">Enter Password</span><label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter Password" value="{{ old('password') }}" required>
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
      <!-- </div>
</div> -->


    </div>
    <div class="col-md-8">
      <div class="card-body">
        <!-- <h5 class="card-title">Let's Join To Have Free Fun</h5><br> -->
        <p class="card-images"><img src="7457.jpg" class="card-img" alt="image regis" style="height: 550px;"></p>
        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      </div>
    </div>
  </div>
</div>



@endsection