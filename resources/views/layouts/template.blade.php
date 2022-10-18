<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Laundry | @yield('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('assets/css/app-dark.css') }}" id="darkTheme" disabled>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
                    placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
                            <img src="{{ asset('assets/assets/avatars/face-1.jpg') }}" alt="..."
                                class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                    ">Logout</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3"
                data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/dashboard">
                        <img src="{{ asset('assets/assets/images/laundry.png') }}" class="w-75" alt=""
                            srcset="">
                    </a>
                </div>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/dashboard">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                @if(Auth::user()->role == 'admin')
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Kelola Data</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#data" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class='bx bx-briefcase'></i>
                            <span class="ml-3 item-text">Data</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="data">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/dataoutlet"><span class="ml-1 item-text">Data
                                        Outlet</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/datapaket"><span class="ml-1 item-text">Data
                                        Paket</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/datapengguna"><span class="ml-1 item-text">Data
                                        Pengguna</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Layanan Laundry</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#layanan" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class='bx bxs-washer'></i>   
                            <span class="ml-3 item-text">Layanan</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="layanan">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/registrasipelanggan"><span
                                        class="ml-1 item-text">Registrasi Pelanggan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/kelolapelanggan"><span
                                        class="ml-1 item-text">Kelola Pelanggan</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/transaksiadmin"><span
                                        class="ml-1 item-text">Transaksi Pelanggan</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Laporan</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#laporan" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class='bx bxs-report'></i>
                            <span class="ml-3 item-text">Laporan Laundry</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="laporan">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/laporanpegawai"><span class="ml-1 item-text">Laporan
                                        Pegawai</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/laporantransaksi"><span
                                        class="ml-1 item-text">Laporan Transaksi</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>                    
                @endif
                @if(Auth::user()->role == 'pegawai')                
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Layanan Laundry</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#layanan" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class='bx bxs-washer'></i>   
                            <span class="ml-3 item-text">Layanan</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="layanan">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/registrasipelanggan"><span
                                        class="ml-1 item-text">Registrasi Pelanggan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/kelolapelanggan"><span
                                        class="ml-1 item-text">Kelola Pelanggan</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="/transaksipelanggan"><span
                                        class="ml-1 item-text">Transaksi Pelanggan</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="/laporantransaksi">
                            <i class="bx bxs-report"></i>
                            <span class="ml-3 item-text">Laporan transaksi</span>
                        </a>
                    </li>
                </ul>
                @endif
            </nav>
        </aside>
        <main role="main" class="main-content">
            <div class="container-fluid">
                @yield('content')
            </div> <!-- .container-fluid -->
        </main> <!-- main -->
    </div> <!-- .wrapper -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
    <script src='{{ asset('assets/js/daterangepicker.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.stickOnScroll.js') }}'></script>
    <script src="{{ asset('assets/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/d3.min.js') }}"></script>
    <script src="{{ asset('assets/js/topojson.min.js') }}"></script>
    <script src="{{ asset('assets/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('assets/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
   
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('assets/js/gauge.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/apexcharts.custom.js') }}"></script>
    <script src='{{ asset('assets/js/jquery.mask.min.js') }}'></script>
    <script src='{{ asset('assets/js/select2.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.steps.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.validate.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.timepicker.js') }}'></script>
    <script src='{{ asset('assets/js/dropzone.min.js') }}'></script>
    <script src='{{ asset('assets/js/uppy.min.js') }}'></script>
    <script src='{{ asset('assets/js/quill.min.js') }}'></script>
    
    <script src="{{ asset('assets/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    
</body>

</html>
