<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MysNAV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{$title == 'Home' ? 'active' : '' }}" aria-current="page" href="/Homes">Home</a>
        <a class="nav-link {{$title == 'Menu' ? 'active' : '' }}" href="/Menu">Menu</a>
        <a class="nav-link {{$title == 'About' ? 'active' : '' }}" href="/About">About</a>
        <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>