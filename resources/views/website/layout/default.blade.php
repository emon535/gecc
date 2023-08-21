<!---doctype html--->
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="web/img/favicon.png">
    
    <!-- Meta for share preview -->
    <meta property="og:locale" content="en_GB">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:url" content="@yield('meta_post_url')">
    <meta property="og:image" content="@yield('meta_image')">
    <meta property="og:image:alt" content="@yield('meta_image_alt')">
    <meta property="og:image:secure_url" content="@yield('meta_image')">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('meta_title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="@yield('meta_image')">
    
    <!-- CSS=============================== -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('public/web') }}/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ url('public/web') }}/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ url('public/web') }}/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ url('public/web') }}/css/style.css">
    <!-- Gallery Lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <!-- Modernizer JS -->
    <script src="{{ url('public/web') }}/js/vendor/modernizr-2.8.3.min.js"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script async src="https://cse.google.com/cse.js?cx=23705c855ee39c6c4"></script>
<style>
    .invalid-feedback{
        color: red;
    }
    .read-more-show{
      cursor:pointer;
      color: #004783;
    }
    .read-more-hide{
      cursor:pointer;
      color: #004783;
    }

    .hide_content{
      display: none;
    }

    @media screen and (max-width: 768px) {
        .social-icon-bar {
            top: auto;
            width: auto;
            padding: 0 10px;
            bottom: 55px;
            flex-direction: column;
            background-color: transparent;
            border-color: transparent;
            outline-color: transparent;
            box-shadow: none;
            left: 7px;
        }
    }
</style>

@stack('css')
</head>

<body>

<div id="fb-root"></div>
<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
attribution="setup_tool"
page_id="892472740769956"
theme_color="#00427E">
</div>

<section class="social-icon-bar">
    <a href="https://wa.me/442034893020" target="_blank"><i class="fa fa-whatsapp"></i></a>
    <a href="https://goo.gl/maps/FZadA8VKdiJd2xFg6" target="_blank"><i class="fa fa-map-marker"></i></a> 
</section>

<header class="header-area">
    <div class="header-top bg-img" style="background-image:url({{ url('public/web/img/icon-img/header-shape.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i><a href="tel:+44 20348 93020">+44 20348 93020</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@gecconsultant.co.uk">info@gecconsultant.co.uk</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="footer-menu-social">
                        <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="https://www.facebook.com/GECCUK" target="blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="https://www.youtube.com/channel/UCyqBfykGs6zOmH9294Z1bAA" target="blank"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/GECCUK" target="blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="cart-wrap">
                            <a class="icon-cart event-bt default-btn only-meet">Book E-Meeting</a>
                            <div class="shopping-cart-content" style="display:none;">
                                <form action="{{ route('sendEmeetingMail') }}" method="POST">
                                @csrf
                                    <input type="text" name="name" placeholder="Full Name" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <input type="text" name="phone" placeholder="Phone Number" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <input type="email" name="fromEmail" placeholder="Email Address" required>
                                        @error('fromEmail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <input type="text" name="qualification" placeholder="Latest Qualification" required>
                                        @error('qualification')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <input type="text" name="location" placeholder="Desire Destination/Location" required>
                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <div class="shopping-cart-btn">
                                        <button type="submit" class="default-btn btn-hover">Send Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="login-register">
                        <ul>
                            @php
                                $studentID = Session::get('studentID');
                            @endphp
                            @if($studentID != null)

                                <li><a href="{{ url('user-logout') }}">Logout</a></li>

                            @else

                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('login') }}">Register</a></li>

                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-block alert-{{Session::get("class")}}">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-check green"></i>
            {{ Session::get("message") }}
        </div>
    @endif
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img alt="" src="{{ url('public/web') }}/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/') }}">HOME</a></li>
                                    <li><a href="#">About GECC <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('who') }}">Who we are</a></li>
                                            <li><a href="{{ route('mission') }}">Mission, Vision & Values</a></li>
                                            <li><a href="{{ route('history') }}">History</a></li>
                                            <li><a href="{{ route('people') }}">Our People</a></li>
                                            <li><a href="{{ route('career') }}">Career</a></li>
                                            <li><a href="{{ route('success') }}">Our Success Stories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Study Abroad <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('study') }}">Study Options</a></li>
                                            <li><a href="{{ route('course-finder') }}">Course Finder</a></li>
                                            <li><a href="{{ route('prere') }}">Prerequisites to study abroad</a></li>
                                            <li><a href="{{ route('step') }}">Step by Step Guideline</a></li>
                                            <li><a href="{{ route('video') }}">Free Online Counselling</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('partner') }}">Partner Universities</a></li>
                                    <li><a href="#">Career Guidance <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('guide') }}">Career Guidance</a></li>
                                            <li><a href="{{ route('cv') }}">CV Guidance</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Gallery & News <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('news') }}">News</a></li>
                                            <li><a href="{{ route('events') }}">Events</a></li>
                                            <li><a href="{{ route('gallery') }}">Picture Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">CONTACT <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu cont">
                                            @isset($address)

                                                        <li><a href="{{ route('contact') }}">{{ $address->office_location ? $address->office_location : null   }}</a></li>
                                            @endisset
                                        </ul>
                                    </li>
                                    <div class="header-search-wrapper">
                                        <span class="search-main">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        <div class="search-form-main clearfix">
                                            {{-- <form role="search" method="get" class="search-form" action="sitename.com/">
                                                <label>
                                                    <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                                </label>
                                                <input type="submit" class="search-submit" value="Search">
                                                <a href="#" class="search-cross"><i class="fa fa-times"></i></a>
                                            </form> --}}
                                            <div class="gcse-search"></div>
                                            <a href="#" class="search-cross"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </ul>
                            </nav>
                        </div>
                        <!-- <a href="" class="event-bt default-btn e-meet">Book E-Meeting</a> -->
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="#">About GECC</a>
                                <ul>
                                    <li><a href="{{ route('who') }}">Who we are</a></li>
                                    <li><a href="{{ route('mission') }}">Mission, Vision & Values</a></li>
                                    <li><a href="{{ route('history') }}">History</a></li>
                                    <li><a href="{{ route('people') }}">Our People</a></li>
                                    <li><a href="{{ route('career') }}">Career</a></li>
                                    <li><a href="{{ route('success') }}">Our Success Stories</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Study Abroad</a>
                                <ul>
                                    <li><a href="{{ route('study') }}">Study Options</a></li>
                                    <li><a href="{{ route('course-finder') }}">Course Finder</a></li>
                                    <li><a href="{{ route('prere') }}">Prerequisites to study abroad</a></li>
                                    <li><a href="{{ route('step') }}">Step by Step Guideline</a></li>
                                    <li><a href="{{ route('video') }}">Free Online Counselling</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('partner') }}">Partner Universities</a></li>
                            <li><a href="#">Career Guidance</a>
                                <ul>

                                            <li><a href="{{ route('guide') }}">Career Guidance</a></li>
                                            <li><a href="{{ route('cv') }}">CV Guidance</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Gallery & News</a>
                                <ul>
                                    <li><a href="{{ route('news') }}">News</a></li>
                                    <li><a href="{{ route('events') }}">Events</a></li>
                                    <li><a href="{{ route('gallery') }}">Picture Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="#">CONTACT</a>
                                <ul>
                                    @isset($address)
                                    <li><a href="{{ route('contact') }}">{{ $address->office_location ? $address->office_location : null   }}</a></li>
                                    @endisset
                                </ul>
                            </li>
                            <div class="header-search-wrapper">
                                <div class="search-form-main clearfix active-search">
                                    {{-- <form role="search" method="get" class="search-form" action="sitename.com/">
                                        <label>
                                            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                        </label>

                                        <input type="submit" class="search-submit" value="Search">
                                    </form> --}}
                                    <div class="gcse-search"></div>
                                    <a href="#" class="search-cross"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
    @yield('content')
    <!----------Start Footer---------->
    @include('website.layout.footer')
    <!----------End Footer---------->
</body>
</html>
