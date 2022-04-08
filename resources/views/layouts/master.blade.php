<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from www.devsnews.com/template/growbiz/growbiz/{{route('home.view')}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 03:56:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arshiyan Trading International(ATI)</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="#">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('public/frontend/assets/img/favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/main.css') }}">
</head>

<body>
    <!-- header area start  -->
    <header>
        <div class="header__top d-none d-md-block">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-9">
                        <div class="grb__cta header-cta">
                            <ul>
                                <li>
                                    <div class="cta__icon">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Call Us:</p>
                                        <span><a href="tel:(555)674890556">(+88) 01711100100</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cta__icon">
                                        <span><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Mail Us:</p>
                                        <span><a href="mailto:someone@growbiz.com">someone@ati.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cta__icon">
                                        <span><i class="fas fa-clock"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Service Hours</p>
                                        <span>9:30 AM - 6:30 PM</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="grb__social f-right st-1">
                            <ul>
                                <li><a class="fb" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twt" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="insta" href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="pint" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__main header-sticky header-main-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-8">
                        <div class="logo">
                            <div class="logo-bg-1">
                                <img src="{{ URL::asset('public/frontend/assets/img/shape/logo-bg-1.png') }}" alt="">
                            </div>
                            <a class="logo-text-white" href="{{route('home.view')}}"><img src="{{ URL::asset('public/frontend/assets/img/logo/logo.png') }}" alt=""></a>
                            <a class="logo-text-black" href="{{route('home.view')}}"><img src="{{ URL::asset('public/frontend/assets/img/logo/ati_logo_black.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-4">
                        <div class="header__menu-area f-right">
                            <div class="menu-bg-1">
                                <img src="{{ URL::asset('public/frontend/assets/img/shape/menu-bg-1.png') }}" alt="">
                            </div>
                            <div class="main-menu main-menu-1">
                                <nav id="mobile-menu">
                                    <ul style="padding-left: 115px;">
                                        <li><a href="{{route('home.view')}}">Home</a></li>
                                        <li><a href="{{route('about.view')}}">About</a></li>
                                        <li class="menu-item-has-children"><a href="{{route('service.view')}}">Service</a>
                                            {{-- <ul class="sub-menu">
                                                <li><a href="{{route('service.view')}}">Service</a>
                                                <li><a href="{{route('service-details.view')}}">Service Details</a></li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="menu-item-has-children"><a href="{{route('portfolio.view')}}">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('portfolio.view')}}">Portfolio</a>
                                                <li><a href="{{route('portfolio-details.view')}}">Portfolio Details</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{route('team.view')}}">Team</a></li>
                                        <li class="menu-item-has-children"><a href="{{route('blog.view')}}">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('blog.view')}}">Blog</a>
                                                <li><a href="{{route('blog-details.view')}}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('contact.view')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__search">
                                <a class="search-btn nav-search search-trigger d-none d-sm-inline-block" href="#"><i
                                        class="fal fa-search"></i></a>
                                <a class="side-toggle d-lg-none" href="javascript:void(0)"><i
                                        class="fal fa-bars"></i></a>
                            </div>
                            <div class="header__btn d-none d-xl-inline-block">
                                <a href="{{route('contact.view')}}" class="grb-btn">Get Reserved<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- side toggle start  -->
    <div class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset-widget offset-logo mb-30 pb-20">
                    <div class="row align-items-center">
                        <div class="col-9"><a href="{{route('home.view')}}"><img src="{{ URL::asset('public/frontend/assets/img/logo/logo.png') }}" alt="Logo"></a>
                        </div>
                        <div class="col-3 text-end"><button class="side-info-close"><i
                                    class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu d-lg-none"></div>
                <div class="offset-widget offset_searchbar mb-30">
                    <form method="get" action="#">
                        <div class="offset_search_content">
                            <input type="search" placeholder="What are you searching for?">
                            <button type="submit" class="offset_search_button"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <div class="offset-widget mb-40 d-none d-lg-block">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20 d-none">About Us</h4>
                        <p class="mb-30">But I must explain to you how all this mistaken idea of
                            denouncing pleasure and
                            praising pain
                            was born and will give you a complete account of the system and expound the actual teachings
                            of the great
                            explore</p>
                        <a href="#" class="c-btn btn-round-02 d-none">Contact Us</a>
                    </div>
                </div>

                <div class="row side-gallery gx-4">
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="{{ URL::asset('public/frontend/assets/img/portfolio/pm1.jpg') }}"><img
                                    src="{{ URL::asset('public/frontend/assets/img/portfolio/pm1.jpg') }}" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="{{ URL::asset('public/frontend/assets/img/portfolio/pm2.jpg') }}"><img
                                    src="{{ URL::asset('public/frontend/assets/img/portfolio/pm2.jpg') }}" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="{{ URL::asset('public/frontend/assets/img/portfolio/pm3.jpg') }}"><img
                                    src="{{ URL::asset('public/frontend/assets/img/portfolio/pm3.jpg') }}" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="{{ URL::asset('public/frontend/assets/img/portfolio/pm4.jpg') }}"><img
                                    src="{{ URL::asset('public/frontend/assets/img/portfolio/pm4.jpg') }}" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="{{ URL::asset('public/frontend/assets/img/portfolio/pm5.jpg') }}"><img
                                    src="{{ URL::asset('public/frontend/assets/img/portfolio/pm5.jpg') }}" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="{{ URL::asset('public/frontend/assets/img/portfolio/pm6.jpg') }}"><img
                                    src="{{ URL::asset('public/frontend/assets/img/portfolio/pm6.jpg') }}" alt="sidebar-img"></a>
                        </div>
                    </div>
                </div>

                <div class="side-map mt-20 mb-30 d-none d-lg-block">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041981.899057291!2d-87.62979822192196!3d41.878113633413804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2sbd!4v1627994034288!5m2!1sen!2sbd"></iframe>
                </div>



                <div class="contact-infos mt-30 mb-30">
                    <div class="contact-list mb-30">
                        <h4>Contact Info</h4>
                        <a href="#" class="">
                            <i class="fal fa-map-marker-alt"></i>
                            <span>Johnson Super Street,
                                New York, USA 2344</span>
                        </a>
                        <a href="tel:(555)764890345" class="">
                            <i class="fal fa-phone"></i>
                            <span>(555) 764 890 345</span>
                        </a>
                        <a href="mailto:info@domain.com" class="">
                            <i class="far fa-envelope"></i>
                            <span>info@domain.com</span>
                        </a>

                    </div>
                    <div class="grb__social footer-social offset-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- side toggle end -->
    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->
    <main>

        @yield('section')

        <!-- newsletter area start  -->
        <div class="newsletter-area">
            <div class="container">
                <div class="row wow fadeInUp align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-text mb-30">
                            <h4>Subscribe Us For Newsletter</h4>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined the Newsletter
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="subscribe-form mb-30">
                            <input type="text" placeholder="Enter your email...">
                            <button type="submit"><i class="fas fa-paper-plane"></i>Subscribe Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->
    </main>
    <!-- footer area start  -->
    <footer>
        <section class="footer-area pt-80 pb-40">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-40">
                            <div class="question-area">
                                <div class="question-icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <div class="question-text">
                                    <p>Have a question? Call us 24/7</p>
                                    <span><a href="tel:987547587587">(+88) 01711100200</a></span>
                                </div>
                            </div>
                            <div class="footer-address">
                                <h5>Contact Info</h5>
                                <p>Location, Bangladesh</p>
                            </div>
                            <div class="grb__social footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40 cat-m">
                            <div class="footer-widget-title">
                                <h4>Categories</h4>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">Office Supplies</a></li>
                                <li><a href="#">Construction Management</a></li>
                                <li><a href="#">Handy Man & Janitorial</a></li>
                                <li><a href="#">Corporate Event Management</a></li>
                                <li><a href="#">Scrap Management & Recycling</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <div class="footer-widget-title">
                                <h4>About Company</h4>
                            </div>
                            <ul class="footer-list">
                                <li><a href="{{route('about.view')}}">About Company</a></li>
                                <li><a href="{{route('contact.view')}}">Contact Us</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Mission & Vision</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget mb-40 srv-m">
                            <div class="footer-widget-title">
                                <h4>Service Schedule</h4>
                            </div>
                            <ul class="worktime-list">
                                <li>
                                    <h5>Saturday - Sunday - Mon</h5>
                                    <span>8:30 AM - 10 PM</span>
                                </li>
                                <li>
                                    <h5>Tuesday - Wed - Thurs</h5>
                                    <span>9:30 AM - 12 PM</span>
                                </li>
                                <li>
                                    <h5>Friday : <span>Closed</span></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="copyright-area">
            <div class="container">
                <div class="row wow fadeInUp align-items-center">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="copyright-logo logo-shape">
                            <a href="{{route('home.view')}}">
                                <img src="{{ URL::asset('public/frontend/assets/img/logo/ati_logo_white.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="copyright-text">
                            <p>Copyrighted by <a href="#">@Something</a> | All Right Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <ul class="copyright-list f-right">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="{{route('about.view')}}">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->



    <!-- JS here -->
    <script src="{{ URL::asset('public/frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/odometer.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/appair.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('public/frontend/assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from www.devsnews.com/template/growbiz/growbiz/{{route('home.view')}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 03:57:00 GMT -->
</html>