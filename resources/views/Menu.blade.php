@extends('layouts/main')

@section('container')



<h1 class="text-center display-4">The Menu's</h1><br>

<div class="row">


  <form action="/Menu" method="get">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <button class="btn btn-primary" type="submit">Search</button>
    </div>
  </form>

  @foreach( $MenuLists as $mes )
  <div class="col mb-4 mt-5">

    <div class="card" style="width: 18rem;">
      <img src="{{ $mes->images }}" class="card-img-top" alt="bem">
      <div class="card-body">
        <h5 class="card-title">{{ $mes->cardtitle }}</h5>
        <p class="card-text">{{ $mes->descriptions }}</p>
        <a href="/Menus/{{ $mes->cardtitle }}" class="btn btn-primary">Views</a>

      </div>

    </div>
  </div>

  @endforeach

</div>


@endsection