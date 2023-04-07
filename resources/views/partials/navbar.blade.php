<nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-bs-theme="dark">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">V
                        Market Place</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ request()->routeIs('cart') ? 'active' : '' }}"
                        href="{{ route('cart') }}">Cart</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ request()->routeIs('cart') ? 'active' : '' }}"
                        href="{{ route('transactions') }}">Transactions</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-nav navbar-collapse justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item " href="#">Dashboard</a></li>
                </ul>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item " href="auth/logout">Logout</a></li>
                </ul>
            </li>
        </div>
    </div>
</nav>
