<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard')?'active' : '' }}" aria-current="page" href="/dashbord">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard'/cretestory)?'active' : '' }}" href="/dashboard/createstory">
                    <span data-feather="file"></span>
                    Create Story
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/memberdata')?'active' : '' }}" href="/dashboard/memberdata">
                    <span data-feather="file-text"></span>
                    Member Data
                </a>
            </li>

        </ul>
    </div>
</nav>