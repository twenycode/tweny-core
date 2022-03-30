<nav id="sidebar" class="sidenav">
    <a class="navbar-brand" href="{{url('/')}}" title="Site"><i class="fa fa-globe"></i> Site</a>

    <ul class="list-unstyled components menu pb-5">

        <li class="active">
            <a href="{{route('dashboard')}}">
                <div class="nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
            </a>
        </li>

        <!-- Authentication and Authorization -->
        <li>
            <a href="#access" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="nav-link-icon"><i class="fa fa-user-shield"></i></div> User Auth
            </a>
            <ul class="collapse list-unstyled submenu" id="access">
                <li>
                    <a href="#">
                        Users
                    </a>
                </li>
                <li>
                    <a href="{{route('permissions.index')}}">
                        Permissions
                    </a>
                </li>
                <li>
                    <a href="{{route('roles.index')}}">
                        Roles
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</nav>
