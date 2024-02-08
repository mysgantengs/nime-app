@extends('layouts.main')

@section('container')

<h1 class="text-center">The Menu's</h1><br>

<div class="row">
@foreach( $MenuLists as $mes )

   <div class="col">
    <div class="card" style="width: 18rem;">
    <img src="{{$mes['images']}}" class="card-img-top" alt="bem">
    <div class="card-body">
    <h5 class="card-title">{{$mes['cardtitle']}}</h5>
    <p class="card-text">{{$mes['descriptions']}}</p>
    <a href="/viewrenders" class="btn btn-primary">Views</a>
  </div>
</div>
</div>
<br>
  @endforeach
</div>

  @endsection 



   

