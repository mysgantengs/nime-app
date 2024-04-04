@extends('layouts/main')

@section('container')

<div class="row">
    <div class="col-md-4 mx-auto">

        <h1 class="text-center">{{ $Menus->cardtitle }}</h1><br>
        <img src="{{ $Menus->images }}" alt="gambar" width="300x" height="300px" class="mb-5">
    </div>
</div>
<p class="text-center">{{ $Menus->descriptions }}</p>
</div>
@endsection