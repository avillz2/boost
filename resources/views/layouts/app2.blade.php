<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from shreethemes.in/landrick/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 00:09:51 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Boost</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('/land/images/favicon.ico')}}">
        <!-- Bootstrap -->
        <link href="{{asset('/land/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{asset('/land/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('/land/unicons.iconscout.com/release/v3.0.6/css/line.css')}}">
        <!-- Slider -->
        <link rel="stylesheet" href="{{asset('/land/css/tiny-slider.css')}}"/>
        <!-- Main Css -->
        <link href="{{asset('/land/css/style.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{asset('/land/css/colors/default.css')}}" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
            <!-- Logo container-->
             <a class="logo" href="index.html">
                    {{-- <img src="{{asset('/land/images/logo-dark.png')}}" height="24" class="logo-light-mode" alt=""> --}}
                    <img src="{{asset('/land/images/logo-light.png')}}" height="24" class="logo-dark-mode" alt="">
                </a>

                <div class="buy-button">
                   <a href="{{ route('login') }}" target="_blank" class="btn btn-light">Login</a>
                         <a href="{{ route('register') }}" target="_blank" class="btn btn-primary">Register</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li><a href="{{route('/price')}}" class="sub-menu-item">Pricing</a></li>
                         <li><a href="{{route('/blog')}}" class="sub-menu-item">Blog</a></li>
                          <li><a href="{{route('/membership')}}" class="sub-menu-item">Membership</a></li>

                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="{{ route('login') }}" target="_blank" class="btn btn-light">Login</a>
                         <a href="{{ route('register') }}" target="_blank" class="btn btn-primary">Register</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

          @yield('content')


        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                       <a href="./">
        <img src="{{setting('app_dark_logo')? setting('app_dark_logo'):asset('uploads/appLogo/logo-dark.png')}}" class="img img-responsive" height="60px" width="220px" alt="App Logo">
      </a>
                        <p class="mt-4">List your first product in under a minute and keep 99% of what you make after payment processing fees. No monthly fees either.</p>
                        <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->

                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Company</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="{{route('/price')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                            <li><a href="{{route('/blog')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                            <li><a href="{{route('/membership')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> membership</a></li>
                            <li><a href="#" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Collab</a></li>
                            <li><a href="#" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Redirect</a></li>

                            <li><a href="{{ route('register') }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Register</a></li>
                            <li><a href="{{ route('login') }}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                        </ul>
                    </div><!--end col-->



                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Newsletter</h5>
                        <p class="mt-4">Sign up and receive the latest tips via email.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe mb-3">
                                        <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="Your email : " required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- Style switcher -->
        <!-- end Style switcher -->

        <!-- javascript -->
        <script src="{{asset('/land/js/bootstrap.bundle.min.js')}}"></script>
        <!-- SLIDER -->
        <script src="{{asset('/land/js/tiny-slider.js')}}"></script>
        <!-- Icons -->
        <script src="{{asset('/land/js/feather.min.js')}}"></script>
        <!-- Switcher -->
        <script src="{{asset('/land/js/switcher.js')}}"></script>
        <!-- Main Js -->
        <script src="{{asset('/land/js/plugins.init.js')}}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{asset('/land/js/app.js')}}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>

<!-- Mirrored from shreethemes.in/landrick/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Apr 2021 00:12:29 GMT -->
</html>
