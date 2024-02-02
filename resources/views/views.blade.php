








@extends('layouts.main')

@section('container')

<h1 class="text-center">{{$cardtTitle}}</h1><br>

<div class="row">
@foreach( $MenuLists as $mess )
<div class="col-md-4 mx-auto">
       <img src="{{$mess['images']}}" alt="gambar" width="300x" height="300px">
        </div>
 </div>
        <p class="text-center">{{$mess['descriptions']}}</p>
  @endforeach
</div>
 @endsection




