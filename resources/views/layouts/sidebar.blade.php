<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
      <div class="sidebar-brand-icon rotate-n-15">
      </div>
      <div class="sidebar-brand-text mx-3">Tugas UTS</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="bi bi-house-door"></i>
        <span>Dashboard</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('karyawan') }}">
        <i class="bi bi-people-fill"></i>
        <span>Karyawan</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('divisi') }}">
        <i class="bi bi-person-workspace"></i>
        <span>Divisi</span></a>
    </li>
    
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>