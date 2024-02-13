<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Pet Adaption System</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.min.css')}}">
    @livewireStyles

</head>
<body class="layout-4">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!-- Start app top navbar -->
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        {{-- <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li> --}}
                        {{-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> --}}
                    </ul>
                    {{-- <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>

                </div> --}}
                </form>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item has-icon text-danger"><i class="fas fa-gauge"></i> Logout</a>
                    </div>
                </li>
                </ul>
            </nav>

            <!-- Start main left sidebar menu -->
            <div class="main-sidebar sidebar-style-3">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/dashboard">Furry Friends Forever</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="/dashboard">FFF</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header"><a href="/dashboard"><i class="fas fa-tachometer-alt-slowest"></i>Dashboard</a></li>
                        <li class="menu-header"><a href="/pet"><i class="far fa-dog"></i>Pets</a></li>
                        <li class="menu-header"><a href="/petbookings"><i class="fad fa-cart-plus"></i>Pet Bookings</a></li>
                        <li class="menu-header"><a href="/customers"><i class="fas fa-users"></i>Customers</a></li>
                        <li class="menu-header"><a href="/contactus"><i class="fas fa-address-card"></i>Contact us</a></li>
                        @if (Auth::user()->user_type == "SuperAdmin")
                        <li class="menu-header"><a href="/user"><i class="fas fa-user"></i>User</a></li>
                        @else
                        <a href="/404"></a>
                        @endif
                </aside>
            </div>




            <div class="main-content">
                {{$slot}}
            </div>

            <!-- Start app Footer part -->
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="/dashboard">Malini</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    @livewireScripts
    <script src="{{asset('assets/bundles/lib.vendor.bundle.js')}}"></script>
    <script src="{{asset('js/CodiePie.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('assets/modules/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/modules/chart.min.js')}}"></script>
    <script src="{{asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('js/page/index.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script>
        // this is for insert
        window.addEventListener('insert-show-form', event => {
            $('#insert-model').modal('show');
        });
        window.addEventListener('insert-hide-form', event => {
            $('#insert-model').modal('hide');
        });

        // this is for delete
        window.addEventListener('delete-show-form', event => {
            $('#delete-model').modal('show');
        });
        window.addEventListener('delete-hide-form', event => {
            $('#delete-model').modal('hide');
        });

    </script>
</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>
