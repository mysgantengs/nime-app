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
<div class="col-lg-8 mx-auto">

    <div class="card mb-3 text-center">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <form action="/dashboard/createstory/create" method="get">
                <button type="submit" class="btn btn-primary mb-3">New Story</button>

            </form>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>


    </div>


    @endsection