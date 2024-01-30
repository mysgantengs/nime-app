@extends('layouts.main')

@section('container')
    <h1>Hello Menu</h1>

    @foreach($content as $cons)
    <p>{{$cons['content']}}</p>
    @endforeach
@endsection    

