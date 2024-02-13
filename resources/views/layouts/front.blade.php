<!DOCTYPE html>
<html lang="en">
<head>
    <title>Furry Friends Forever</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('front_assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('front_assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
    @livewireStyles()
</head>
<body>

    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="tel:+94 71 68 61 554" class="mr-2"><span class="fa fa-phone mr-1"></span>+94 71 68 61 554</a>
                        <a href="mailto:adaptionfff@gmail.com"><span class="fa fa-paper-plane mr-1"></span>adaptionfff@gmail.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><span class="flaticon-pawprint-1 mr-2"></span>Furry Friends Forever</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/about-us" class="nav-link">About</a></li>
                    @if (Auth::guard('customer')->check())
                    <li class="nav-item"><a href="/adopt-your-pet" class="nav-link">Adopt Your Pet</a></li>
                    @else
                    <li class="nav-item"><a href="/flogin" class="nav-link">Adopt Your Pet</a></li>
                    @endif
                    <li class="nav-item"><a href="/contact-us" class="nav-link">Contact</a></li>
                    @if (Auth::guard('customer')->check())
                    <li class="nav-item"><a href="/customer-logout" class="nav-link">Log Out</a></li>
                    <li class="nav-item" ><a class="nav-link" disabled>{{Auth::guard('customer')->user()->customer_fname}}</a></li>

                    @else
                    <li class="nav-item"><a href="/flogin" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="/customer-register" class="nav-link">Sign Up</a></li>
                    @endif


                </ul>
            </div>

        </div>
    </nav>
    <!-- END nav -->

    {{ $slot }}

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                    <h2 class="footer-heading">Pet Adoption</h2>
                    <p>Pet adoption is a compassionate choice that saves lives. By adopting a pet from a shelter or rescue organization, you provide a loving home and a second chance for a deserving animal.</p>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 pl-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="/" class="py-2 d-block">Home</a></li>
                        <li><a href="/about-us" class="py-2 d-block">About</a></li>
                        <li><a href="/contact-us" class="py-2 d-block">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                    <h2 class="footer-heading">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map"></span><span class="text">Ward No.8, Pesalai, Mannar, 41000</span></li>
                            <li><a href="tel:+94 71 68 61 554"><span class="icon fa fa-phone"></span><span class="text">+94 71 68 61 554</span></a></li>
                            <li><a href="mailto:adaptionfff@gmail.com"><span class="icon fa fa-paper-plane"></span><span class="text">adaptionfff@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">

                    <p class="copyright">

                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Thasbiha</a>

                    </p>
                </div>
            </div>
        </div>
    </footer>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg>
    </div>

    @livewireScripts()
    <script src="{{asset('front_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('front_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('front_assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front_assets/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('front_assets/js/google-map.js')}}"></script>
    <script src="{{asset('front_assets/js/main.js')}}"></script>



</body>
</html>
