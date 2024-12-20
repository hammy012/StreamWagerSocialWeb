<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Users
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.user-list') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>All Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.coach-list') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Coaches</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Membership Payments
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.payment-list') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Payments</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Addons
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.profile-view') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Profile</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
