<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Kisborana Sacco</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="usersDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Members
                </a>
                <div class="dropdown-menu" aria-labelledby="usersDropdownMenu">
                    <a class="dropdown-item" href="#">Member Registration</a>
                    <a class="dropdown-item" href="#">View Members</a>
                    <a class="dropdown-item" href="#">Update Member Details</a>
                    <a class="dropdown-item" href="/nextofkin">Next of Kin</a>

                </div>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="rolesDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Loans
                </a>
                <div class="dropdown-menu" aria-labelledby="rolesDropdownMenu">
                <a class="dropdown-item" href="#">Loan Application</a>  
                <a class="dropdown-item" href="#">Loan Amortization</a>
                <a class="dropdown-item" href="#">Loan Deduction Schedule</a>
                <a class="dropdown-item" href="#">Loan Payment</a>
                </div>
            </li>

            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="rolesDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Savings
                </a>
                <div class="dropdown-menu" aria-labelledby="rolesDropdownMenu">
                <a class="dropdown-item" href="/savings">View Savings</a>
                <a class="dropdown-item" href="/savings/create">Create/Upload Savings</a>
                <a class="dropdown-item" href="#">Upload Savings</a>
                <a class="dropdown-item" href="#">Transfer Savings</a>
                </div>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="reportsDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Expenses
                </a>
                <div class="dropdown-menu" aria-labelledby="reportsDropdownMenu">
                    <a class="dropdown-item" href="#">Capture Expenses</a>
                    <a class="dropdown-item" href="#">Define Expense Type</a>
                </div>
            </li>
            
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="reportsDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employers
                </a>
                <div class="dropdown-menu" aria-labelledby="reportsDropdownMenu">
                    <a class="dropdown-item" href="#">Create Employer</a>
                    <a class="dropdown-item" href="#">Update Details</a>
                    <a class="dropdown-item" href="#">View & Manage Employer</a>
                </div>
            </li>
            
            <ul class="nav navbar-nav mr-sm-2 justify-content-end">
                <!-- Authentication Links -->
                @guest
                <div class="alert alert-danger" role="alert">
                    <strong>Ooh!</strong> Please login to continue your access
                </div>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-cogs"></i>
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