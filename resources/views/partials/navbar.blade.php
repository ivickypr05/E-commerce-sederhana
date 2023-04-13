<style>
    body {
        background-image: url("https://img.freepik.com/free-vector/white-abstract-background_23-2148810113.jpg");
    }
</style>
<nav class="navbar navbar-expand-lg p-1 navbar-light">
    <div class="container">
        <li class="nav-item d-none d-lg-block">
            <a class="nav-link mx-2" href="#">
                <img src="https://i.postimg.cc/Qxf3xF2c/Screenshot-2023-04-10-192951-removebg-preview-2.png" height="90" />
            </a>
        </li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button><hr><hr>
        <div class=" collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a
                                class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"href="{{ route('home') }}">ReStyle
                                Product</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->routeIs('cart') ? 'active' : '' }}"
                                href="{{ route('cart') }}">Cart</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->routeIs('transaction') ? 'active' : '' }}"
                                href="{{ route('transaction') }}">Transactions</a>
                        </li>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <div class="collapse navbar-collapse">
                                    <li class=" navbar-nav nav-item dropdown">
                                        <a class="nav-link dropdown-toggle active" href="#"
                                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="/dashboard"><i
                                                        class="fa-light fa-house"></i>
                                                    Dashboard</a></li>
                                            <li><a class="dropdown-item" href="/logout"><i
                                                        class="fa-light fa-right-from-bracket"></i> Logout</a></li>
                                        </ul>
                                    </li>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</nav>
