<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Booky cPanel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.cpanel.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Front End
    </div>

            {{-- Category Dropdown --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Category</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="collapsePages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('categories.index') }}">All Categories</a>
                <a class="collapse-item" href="{{ route('categories.create') }}">Add Category</a>
            </div>
        </div>
    </li>
            {{-- end Category Dropdown --}}


 {{-- Authors Dropdown --}}

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Authors</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{ route('authors.index') }}">All Authors</a>
                        <a class="collapse-item" href="{{ route('authors.create') }}">Add Author</a>
                         </div>
                </div>
            </li>

            {{-- end Author Dropdown --}}

 {{-- books Dropdown --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span>Book</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('books.index') }}">All Books</a>
                <a class="collapse-item" href="{{ route('books.create') }}">Add Book</a>

            </div>
        </div>
    </li>

{{-- end book Dropdown --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin Dashboard
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    {{--  admin Dropdown --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Admin Control</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">All Admins</a>
                <a class="collapse-item" href="{{ route('admin.cpanel.admin.register') }}">Add Admin \User</a>
                <a class="collapse-item" href="#">All Users</a>
                <a class="collapse-item" href="#">Contact Message</a>
            <a class="collapse-item" href="{{ route('admin.cpanel.borrow.request') }}">Borrow Requests</a>
            </div>
        </div>
    </li>

{{-- end admin Dropdown --}}

 {{-- Site settings Dropdown --}}

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Site Settings</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="#">test</a>
     </div>
    </div>
</li>

{{-- end Site settingss --}}


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
