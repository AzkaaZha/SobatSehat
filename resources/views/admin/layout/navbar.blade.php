<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between bg-white">
        <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="home.blade.php"><img src="{{ asset('admin/assets/images/logo1.png') }}" alt="logo" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
            <i class="mdi mdi-menu"></i>
        </button>
        <ul class="navbar-nav">

            <!-- Breadcrumb Start -->
            <li class="nav-item border-0 nav-profile">
                <a href="" class="nav-link">
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>

            <li class="nav-item border-0 nav-profile custom-has-slash">
                <a href="http://" class="nav-link">
                    <span class="menu-title mb-2">Pages</span>
                </a>
            </li>
            <li class="nav-item border-0 nav-profile custom-has-slash">
                <a href="http://" class="nav-link">
                    <span class="font-weight-medium mb-2">Dashboard</span>
                </a>
            </li>

            <!-- <li class="nav-item border-0 nav-profile custom-has-slash">
                <a href="http://" class="nav-link">
                    <span class="font-weight-medium mb-2">Daftar Event</span>
                </a>
            </li> -->

            <!-- Breadcrumb End --> 

        </ul>
        
        <!-- Navbar Right -->
        <ul class="navbar-nav navbar-nav-right ml-lg-auto">
            
            <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-magnify"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </li>

            <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-account"></i>
                </a>

                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>


            </li>

            <li class="nav-item  nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-settings"></i>
                </a>

                <div class="dropdown-menu navbar-dropdown" aria-labelledby="settingDropdown">
                    <a class="dropdown-item" href="https://support.google.com/websearch/answer/2539428?hl=id&co=GENIE.Platform%3DAndroid"> Settiing </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

<div class="main-panel">