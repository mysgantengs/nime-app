
@extends('layouts.main')
    
    @section('container')
    
    <!-- @foreach ($MenuLists) -->
    <h1 class="text-center">{{$titleII}}</h1>
        <div class="row">
            <div class="col-md-4 mx-auto">
       <img src="{{$img}}" alt="gambar" width="300x" height="300px" class="img-thumbnail rounded-circle text-center">
        </div>
            </div>
        <p class="text-center">{{$content}}</p>

    @endsection
     
  
