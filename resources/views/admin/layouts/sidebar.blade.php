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

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-table fa-fw"></i>
            <span>Products</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Add</a>
                <a class="collapse-item" href="">List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory1"
            aria-expanded="true" aria-controls="collapseCategory1">
            <i class="fas fa-table fa-fw"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategory1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-new-category') }}">Add</a>
                <a class="collapse-item" href="">List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory2"
            aria-expanded="true" aria-controls="collapseCategory2">
            <i class="fas fa-table fa-fw"></i>
            <span>Sub Categories</span>
        </a>
        <div id="collapseCategory2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Add</a>
                <a class="collapse-item" href="">List</a>
            </div>
        </div>
    </li>

    {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategoryPublic"
            aria-expanded="true" aria-controls="collapseCategoryPublic">
            <i class="fas fa-table fa-fw"></i>
            <span>Public Bets</span>
        </a>
        <div id="collapseCategoryPublic" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-new-publicbet') }}">Add</a>
                <a class="collapse-item" href="{{ route('admin.publicbet-list') }}">List</a>
            </div>
        </div>
    </li>  --}}

    {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLanding"
            aria-expanded="true" aria-controls="collapseLanding">
            <i class="fas fa-car fa-fw"></i>
            <span>Landing Page</span>
        </a>
        <div id="collapseLanding" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-new-landing') }}">Add</a>
                <a class="collapse-item" href="{{ route('admin.landing-list') }}">List</a>
            </div>
        </div>
    </li>  --}}

    {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-table fa-fw"></i>
            <span>Projects</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @if (Auth::guard('admin')->user()->id != 4)
                    <a class="collapse-item" href="{{ route('admin.add-new') }}">Add</a>
                @endif
                <a class="collapse-item" href="{{ route('admin.list') }}">List</a>
            </div>
        </div>
    </li>  --}}

    {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
            aria-expanded="true" aria-controls="collapseProduct">
            <i class="fas fa-mobile fa-fw"></i>
            <span>Tasks</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-new-task') }}">Add</a>
                <a class="collapse-item" href="{{ route('admin.task-list') }}">List</a>
            </div>
        </div>
    </li>  --}}





    {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvent"
            aria-expanded="true" aria-controls="collapseEvent">
            <i class="fas fa-fw fa-table"></i>
            <span>Events</span>
        </a>
        <div id="collapseEvent" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-new-event') }}">Add</a>
                <a class="collapse-item" href="{{ route('admin.event-list') }}">List</a>
            </div>
        </div>
    </li>  --}}

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Info
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Add</a>
                <a class="collapse-item" href="">List</a>
            </div>
        </div>
    </li>

    {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFAQ"
            aria-expanded="true" aria-controls="collapseFAQ">
            <i class="fas fa-fw fa-users"></i>
            <span>FAQ</span>
        </a>
        <div id="collapseFAQ" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-new-faq') }}">Add</a>
                <a class="collapse-item" href="{{ route('admin.faq-list') }}">List</a>
            </div>
        </div>
    </li>  --}}

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Addons
    </div>

    <li class="nav-item">
        <a class="nav-link" href="">
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
