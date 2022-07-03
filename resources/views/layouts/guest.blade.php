<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>	
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo-plant-motto.png">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
        @livewireStyles
    </head>
    <body class="home-page home-01 ">

        <!-- mobile menu -->
        <div class="mercado-clone-wrap">
            <div class="mercado-panels-actions-wrap">
                <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
            </div>
            <div class="mercado-panels"></div>
        </div>

        <!--header-->
        <header id="header" class="header header-style-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="topbar-menu-area">
                        <div class="container">
                            <div class="topbar-menu left-menu">
                                <ul>
                                    <li class="menu-item" >
                                        <p></P>
                                    </li>
                                </ul>
                            </div>
                            <div class="topbar-menu right-menu">
                                <p></P>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="mid-section main-info-area">

                            <div class="wrap-logo-top left-section">
                                <h1>Immuno Status</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{ $slot }}

        <footer id="footer">
            <div class="wrap-footer-content footer-style-1">
                <!--End function info-->


                <div class="coppy-right-box">
                    <div class="container">
                        <div class="coppy-right-item item-left">
                            <p class="coppy-right-text">Copyright © 2022 Immuno Status</p>
                        </div>
                        <div class="coppy-right-item item-right">
                            <div class="wrap-nav horizontal-nav">
                                <ul>
                                    <li class="menu-item"><a href="about-us.html" class="link-term">About Us</a></li>								
                                    <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
                                    <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>						
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
        <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
        <script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
        <script src="{{ asset('assets/js/functions.js')}}"></script>
        @livewireScripts
    </body>
</html>