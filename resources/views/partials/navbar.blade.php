<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container">
    <a class="navbar-brand btn btn-warning text-danger" href="#">MysNAV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{$title == 'Home' ? 'active' : '' }} text-white" aria-current="page" href="/Homes">Home</a>
        <!-- <a class="nav-link {{$title == 'Menu' ? 'active' : '' }} text-white" href="/Menu">Menu</a> -->
        <a class="nav-link {{$title == 'About' ? 'active' : '' }} text-white" href="/About">About</a>
      </div>
    </div>
  </div>
</nav>