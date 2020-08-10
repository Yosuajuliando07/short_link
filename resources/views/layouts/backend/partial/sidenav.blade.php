<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="{{ asset('assets/img/brand/logo.png') }}" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
        @if (Auth::check() && Auth::user()->role->id == 1)

        {{-- <li class="{{ Request::is('home*') ? 'active' : '' }}">
          <a href="{{route('home')}}">
              <i class="material-icons">home</i>
              <span>Beranda</span>
          </a>
      </li> --}}

          <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard')}}">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/kelola_member') ? 'active' : '' }}" href="{{ route('admin.kelola_member')}}">
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text">Kelola Member</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/listshortlink') ? 'active' : '' }}" href="{{ route('admin.listshortlink.index') }}">
              <i class="ni ni-pin-3 text-primary"></i>
              <span class="nav-link-text">List Shortener Link</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/profile.html">
              <i class="ni ni-single-02 text-yellow"></i>
              <span class="nav-link-text">Profil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/tables.html">
              <i class="ni ni-settings-gear-65 text-default"></i>
              <span class="nav-link-text">Ubah Password</span>
            </a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link active" href="examples/dashboard.html">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/map.html">
              <i class="ni ni-pin-3 text-primary"></i>
              <span class="nav-link-text">Shortener Link</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/profile.html">
              <i class="ni ni-single-02 text-yellow"></i>
              <span class="nav-link-text">Profil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/tables.html">
              <i class="ni ni-settings-gear-65 text-default"></i>
              <span class="nav-link-text">Ubah Password</span>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</nav>