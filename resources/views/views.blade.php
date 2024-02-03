<!-- 








@extends('layouts.main')

@section('container')


<div class="row">
@foreach ( $Menus as $mess )
<div class="col-md-4 mx-auto">
<h1 class="text-center">{{$mess['cardtitle']}}</h1><br>

       <img src="{{$mess['images']}}" alt="gambar" width="300x" height="300px">
        </div>
 </div>
        <p class="text-center">{{$mess['descriptions']}}</p>
  @endforeach
</div>
 @endsection



 -->
