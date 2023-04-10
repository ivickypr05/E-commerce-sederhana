<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-space-between" data-bs-theme="dark">
    <div class="container">
        <div class="collapse navbar-collapse">
            <li class="navbar-nav ">
                <h4>
                    <a class="nav-link active" href="{{ route('home') }}">ReStle
                        Fourteen</a>
                </h4>
            </li>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">ReStye Product</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->routeIs('cart') ? 'active' : '' }}"
                            href="{{ route('cart') }}">Cart</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->routeIs('transaction') ? 'active' : '' }}"
                            href="{{ route('transaction') }}">Transactions</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                <li class=" navbar-nav nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown">
                        Name User
                        {{-- {{ Auth::user()->name }} --}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item " href="/dashboard">Dashboard</a></li>
                    </ul>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item " href="#!">Logout</a></li>
                    </ul>
                </li>
            </div>
        </div>
</nav>
