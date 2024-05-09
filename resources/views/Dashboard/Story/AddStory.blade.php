@extends('Dashboard.Layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h4 class="h5">Create My Story</h4>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>
</div>

@if(session()->has('success'))
<div class="alert alert-warning alert-dismissible fade show" style="max-width:970px;" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form action="/dashboard/createstory/store" method="post">
    <h5>Enter New Cartitle</h5>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="cardtitle" placeholder="cardttle">
        <label for="floatingInput">Cardtitle</label>
    </div>
    <h5 class="mt-3">Enter New Description</h5>
    <div class="mb-3">
        <textarea class="form-control" name="description" placeholder="description" rows="3"></textarea>
    </div>
    <div class="form-floating">
        <input id="x" value="Editor content goes here" type="hidden" name="content">
        <trix-editor input="x"></trix-editor>
    </div>
    <!-- <h5 class="mt-3">Enter Images</h5>
    <div class="mb-5">
        <input class="form-control form-control-sm" name="images" type="file">
    </div> -->
    <button type="submit" class="btn btn-primary mb-3">Add Story</button>

    <div>
</form>

@endsection