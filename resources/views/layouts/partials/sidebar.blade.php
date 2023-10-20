<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-yin-yang"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Harmoni</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item {{ Request::is('jasaperusahaan*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/jasaperusahaan') }}">
      <i class="fas fa-building"></i>
      <span>Jasa Perusahaan</span></a>
  </li>

  <li class="nav-item {{ Request::is('galeryfoto*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/galeryfoto') }}">
      <i class="fas fa-image"></i>
      <span>Galery Foto</span></a>
  </li>

  <li class="nav-item {{ Request::is('artikel*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/artikel') }}">
      <i class="fas fa-newspaper"></i>
      <span>Artikel</span></a>
  </li>

  <li class="nav-item {{ Request::is('admin*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/admin') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Admin</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
