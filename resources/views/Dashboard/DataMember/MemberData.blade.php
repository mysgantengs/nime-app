@extends('Dashboard.Layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4 class="h5">Member Data Page's</h4>
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
<div class="col-lg-8">
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <!-- <th scope="col">Header</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($DataMember as $Member)
                <tr>
                    <td>{{ $Member->id }}</td>
                    <td>{{ $Member->name }}</td>
                    <td>{{ $Member->email }}</td>
                    <!-- <td>placeholder</td> -->
                    <!-- <td>text</td> -->
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
</div>

</div>




@endsection