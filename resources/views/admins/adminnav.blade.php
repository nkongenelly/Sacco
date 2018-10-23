<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Kisborana Sacco</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="usersDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Users
                </a>
                <div class="dropdown-menu" aria-labelledby="usersDropdownMenu">
                    <a class="dropdown-item" href="/adduser">Add User</a>
                    <a class="dropdown-item" href="/users">View & Manage users</a>
                </div>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="rolesDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Roles
                </a>
                <div class="dropdown-menu" aria-labelledby="rolesDropdownMenu">
                    <a class="dropdown-item" href="/role/create">Add Role</a>
                    <a class="dropdown-item" href="#">View & Manage roles</a>
                </div>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="reportsDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Users
                </a>
                <div class="dropdown-menu" aria-labelledby="reportsDropdownMenu">
                    <a class="dropdown-item" href="#">Users Reports</a>
                    <a class="dropdown-item" href="#">View users Login history</a>
                </div>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link" href="/loggedusers">Loggedin Users</a>
            </li>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <div class="alert alert-danger" role="alert">
                    <strong>Ooh!</strong> Please login to continue your access
                </div>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->user_first_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </ul>
    </div>
</nav>