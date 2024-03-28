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

      <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
      <li class="navbar-nav ms-auto">
        @auth
        <div class="dropdown">
          <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, {{ auth()->user()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">My Dashboard</a></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
              <!-- <a href="/logout" class="dropdown-item">Logout</a> -->
            </li>
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </div>


        @else

        <div class="nav-item">
          <a class="nav-link {{$title == 'Home' ? 'active' : '' }} text-white" aria-current="page" href="">Log-in</a>
        </div>
      </li>

      @endauth

    </div>
  </div>
  </div>
</nav>