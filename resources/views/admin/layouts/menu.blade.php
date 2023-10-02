<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('ds-home') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('ds-contact') }}" class="nav-link {{ Request::is('dashboard/contact') ? 'active' : '' }}">
        <i class="nav-icon fas fa-phone"></i>
        <p>Contact</p>
    </a>
</li>
