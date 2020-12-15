<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="/">
            <img src="{{ asset('media/photos/eci-logo.png') }}" height="30", width="30"></img>
            <span class="smini-hide">
                <span class="font-w700 font-size-h5">PPMS</span> <span class="font-w400">West Bengal</span>
            </span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                    <i class="nav-main-link-icon si si-cursor"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-main-heading">PP1</li>
            <li class="nav-main-item open">
                <a class="nav-main-link">
                    <i class="nav-main-link-icon si si-home"></i>
                    <span class="nav-main-link-name">Office Details</span>
                </a>
            </li>
            <li class="nav-main-heading">PP2</li>
            <li class="nav-main-item open">
                <a class="nav-main-link" href="/">
                    <i class="nav-main-link-icon si si-users"></i>
                    <span class="nav-main-link-name">Employees</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>