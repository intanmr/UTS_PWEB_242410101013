<nav class="navbar navbar-expand-lg navbar-custom shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand brand-badge" href="{{ route('dashboard') }}">
            PharmaCare
        </a>

        <div class="d-flex gap-2 flex-wrap">
            <a href="{{ route('dashboard') }}"
               class="nav-menu-btn {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>

            <a href="{{ route('pengelolaan') }}"
               class="nav-menu-btn {{ request()->routeIs('pengelolaan') ? 'active' : '' }}">
                Pengelolaan
            </a>

            <a href="{{ route('profile') }}"
               class="nav-menu-btn {{ request()->routeIs('profile') ? 'active' : '' }}">
                Profile
            </a>
        </div>
    </div>
</nav>