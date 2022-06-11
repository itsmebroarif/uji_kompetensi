<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">
        <i class="nav-icon fas fa-about"></i>
        <p>About</p>
    </a>
</li>

