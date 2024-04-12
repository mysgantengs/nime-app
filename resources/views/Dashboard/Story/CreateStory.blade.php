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
<div class="col-lg-6">

    <form action="/Menu" method="post">
        <h5>Enter New Cartitle</h5>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="cardtitle" placeholder="cardttle">
            <label for="floatingInput">Cardtitle</label>
        </div>
        <h5 class="mt-3">Enter New Description</h5>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a description here" name="descriptions" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
        <h5 class="mt-3">Enter Images</h5>
        <div class="mb-5">
            <!-- <label for="formFileSm" class="form-label">Small file input example</label> -->
            <input class="form-control form-control-sm" name="images" type="file">
        </div>
        <div>

    </form>
</div>


@endsection