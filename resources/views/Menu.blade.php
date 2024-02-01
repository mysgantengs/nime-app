@extends('layouts.main')

@section('container')

<div class="row">
    <h1 class="text-center">The Menu's</h1>
  
    <br>

    @foreach( $MenuLists as $mes )
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="{{$images}}" class="card-img-top" alt="bem">
  <div class="card-body">
    <h5 class="card-title">{{$cardtitle}}</h5>
    <p class="card-text">{{$descriptions}}</p>
    <a href="#" class="btn btn-primary">{{$mes['buttonName']}}</a>
  </div>
</div>
</div>
</div>
  @endforeach

<!-- <br>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="GAMBAR1.png" class="card-img-top" alt="GAMBAR">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis officiis architecto quis harum voluptatem! Molestias minima iste pariatur iusto exercitationem et laudantium odio necessitatibus, veniam, quos tempora nemo nobis suscipit?</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<br>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="gambar2.png" class="card-img-top" alt="gambar">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic quia quaerat cumque provident, ullam animi perspiciatis aliquid. Incidunt quasi asperiores recusandae molestiae nostrum culpa aperiam assumenda fugiat, libero dicta? Eligendi..</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<br>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="gambar2.png" class="card-img-top" alt="gambar">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta impedit ut harum eveniet velit autem et doloremque? Quaerat maiores dolore, iusto possimus molestias dolorem esse aliquid, quia soluta saepe debitis.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<br>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="gambar2.png" class="card-img-top" alt="gambar">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet rem facilis qui hic quibusdam fugiat dolores deleniti asperiores beatae recusandae consectetur magnam laudantium laborum iure velit, odio nulla, quidem sint!</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<br>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="gambar2.png" class="card-img-top" alt="gambar">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni architecto excepturi mollitia, impedit voluptate voluptatibus explicabo maiores reiciendis vitae eaque dolore nihil praesentium? Rem mollitia soluta atque eius placeat.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->



@endsection    

