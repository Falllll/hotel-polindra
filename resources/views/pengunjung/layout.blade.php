<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/linearicons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section other-page">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{('/')}}"><img src="{{ asset('/img/trisula/logo-trisula.png') }}" alt="" style="width: 120px;"></a>
                </div>


                <div class="top-widget mobile-menu">
                    <div class="font-size: 20px; text-white">
                        <a href="{{url ('/register')}}">
                            <span>Sign up</span>
                        </a>
                        |
                        <a href="{{url ('/login')}}">
                            <span>Log in</span>
                        </a>
                    </div>

                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu">
                                <ul style="font-size: 20px;">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/service') }}">Services</a></li>
                                    <li><a href="{{ url('/room') }}">Rooms & Suite</a></li>
                                    <li><a href="{{ url('/news') }}">Restaurants</a></li>
                                    <li><a href="{{ url('/news') }}">Reservation</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>

                

    </header>

    @yield('container')

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('/img/trisula/logo-trisula.png') }}" alt="" style="width: 120px;"></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>Jl.Di.Pandjaitan No.77
                                Indramayu<br />West Java
                                Indonesia 45213</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(0234) 272 022</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(0234) 272 022</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(0234) 272 022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> Grand Trisula Hotel. All rights reserved</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="privacy-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Photo Requests</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/js/main.js')}}"></script>
</body>

</html>