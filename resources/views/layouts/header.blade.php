<nav class="navbar navbar-expand-lg navbar-light">
        
<div class="container-fluid">
    <!-- Logo -->
    <img src="{{ asset('images/logos.png') }}" alt="Logo" height="70px">

    <!-- Navbar Brand -->
    <a class="navbar-brand" href="{{ route('home') }}">Cocoon Cafe</a>

    <!-- Toggler for Mobile View -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('menu') }}">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('order') }}">Order Now</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>

            <!-- Login/Register Links -->
            @if (Route::has('login'))
                @auth
                    <!-- Dashboard Link for Authenticated Users -->
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                @else
                    <!-- Login & Register Links for Guests -->
                    <li class="nav-item d-flex">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    </li>
                @endauth
            @endif
        </ul>
    </div>
</div>

</nav>
