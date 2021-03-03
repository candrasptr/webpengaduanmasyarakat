<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">SMKN 1 PADAHERANG</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">PDH</a>
    </div>
      <ul class="sidebar-menu">
        {{-- dashboard --}}
        <li class="menu-header">Dashboard</li>
        <li class="@yield('dashboard')"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
         
        {{-- Entry data --}}
        <li class="menu-header">Entry data</li>
        <li class="@yield('petugas')"><a class="nav-link" href="/petugas"><i class="fas fa-fire"></i> <span>petugas</span></a></li>
        <li class="@yield('masyarakat')"><a class="nav-link" href="/masyarakat"><i class="fas fa-fire"></i> <span>masyarakat</span></a></li>

      </ul>
  </aside>
</div>