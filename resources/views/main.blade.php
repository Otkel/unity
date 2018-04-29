<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Unity Football League</title>


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset("css/styl.css")}}">
    <link rel="stylesheet" href="{{asset("css/styling.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!--[if IE 9]>
    <script src="{{asset("js/media.match.min.js")}}"></script>
    <![endif]-->
</head>

<body>
<div id="main-wrapper">

    <!-- Start Header -->
    <header id="header" class="second-version">
        <div class="container">
            <div class="header-logo">
                <a href="index.html"><img src="{{asset("img/Logo.png")}}" alt=""></a>
                <div class="triangle-left"></div>
                <div class="triangle-right"></div>
            </div>
        </div>
        <div class="header-toolbar">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-language pull-left">
                        <a href="{{url("")}}">
                            <i class="fa fa-globe"></i>
                            <span>ҚАЗ</span>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="custom-list">
                            <li class="active"><a href="{{url("")}}">EN</a></li>
                            <li><a href="{{url("")}}">ҚАЗ</a></li>
                            <li><a href="{{url("")}}">РУС</a></li>
                        </ul>
                    </div>
                    <div class="header-user pull-right">
                        <ul class="custom-list">
                            <li>
                                <div class="header-user-forms">
                                    <div class="header-login">
                                        <a href="{{url("")}}" class="">Кіру</a>
                                        <div>
                                            <form action="#" class="default-form">
                                                <p class="form-row">
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </p>
                                                <p class="form-row">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" class="btn full-width" value="Login">
                                                </p>
                                                <a href="{{url("")}}" class="btn btn-link">Forgot Password?</a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header-register">
                                        <a href="{{url("")}}" class="">Тіркелу</a>
                                        <div>
                                            <form action="#" class="default-form">
                                                <p class="form-row">
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </p>
                                                <p class="form-row">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </p>
                                                <p class="form-row">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </p>
                                                <input type="submit" class="btn full-width" value="Register">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navbar">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <nav class="navigation">
                        <ul class="list-inline text-center custom-list">
                            <li class="has-submenu">
                                <a href="{{url("")}}">Жаңалықтар</a>
                                <ul class="sub-menu custom-list">
                                    <li class="active"><a href="index.html">Home Default</a></li>
                                    <li><a href="home2.html">Home Variation 2 (teams)</a></li>
                                    <li><a href="home3.html">Home Variation 3 (newsletter block)</a></li>
                                    <li><a href="home4.html">Home Variation 4 (timeline & gallery block a)</a></li>
                                    <li><a href="home5.html">Home Variation 5 (video & trophies)</a></li>
                                    <li><a href="home6.html">Home Variation 6 (video & social)</a></li>
                                    <li><a href="home7.html">Home Variation 7 (video & widgets)</a></li>
                                    <li><a href="home8.html">Home Variation 8 (contact form block)</a></li>
                                </ul>
                            </li>
                            <li><a href="#about">Статистика</a></li>
                            <li><a href="#teams">Медиа</a></li>
                            <li><a href="#news">Ойындар кестесі</a></li>
                            <li><a href="#footer">Регламент</a></li>
                        </ul>
                    </nav>
                    <ul class="social list-inline">
                        <li><a href="{{url("")}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{url("")}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{url("")}}"><i class="fa fa-vk"></i></a></li>
                    </ul>
                    <button class="navbar-toggle">
                        <i class="fa fa-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
@yield('content')
<!-- Start Footer -->
    <footer id="footer">
        <div class="container">

            <!-- Start Footer-Top -->
            <div class="footer-top clearfix">
                <div class="widget col-lg-3 col-md-3 col-sm-6">
                    <h5 class="widget-title">ЛИГА ЖАЙЛЫ</h5>
                    <p>Lorem ipsum dolor sit amet consete adipisicing elit. Proin nibh augue.</p>
                    <ul class="contact-info custom-list">
                        <li><i class="fa fa-map-marker"></i><span>Almaty, Abylaikhan street 1, 100150</span></li>
                        <li><i class="fa fa-phone"></i><span>+7 (727) 312 1111</span></li>
                        <li><i class="fa fa-envelope"></i><span><a href="mailto:example@example.com">info@league.com

</a></span></li>
                    </ul>
                </div>
                <div class="widget col-lg-3 col-md-3 col-sm-6">
                    <h5 class="widget-title">АҚПАРАТТАР</h5>
                    <ul class="custom-list">
                        <li><a href="{{url("")}}">About the Club</a></li>
                        <li><a href="{{url("")}}">Shop</a></li>
                        <li><a href="{{url("")}}">Our Team</a></li>
                        <li><a href="{{url("")}}">Tickets and Membership</a></li>
                        <li><a href="{{url("")}}">Features</a></li>
                        <li><a href="{{url("")}}">404 Error Page</a></li>
                    </ul>
                </div>
                <div class="widget col-lg-3 col-md-3 col-sm-6">
                    <h5 class="widget-title">АҚПАРАТТАР</h5>
                    <ul class="custom-list">
                        <li><a href="{{url("")}}">Terms and Conditions</a></li>
                        <li><a href="{{url("")}}">Website Accessibility Statement</a></li>
                        <li><a href="{{url("")}}">Privacy Policy</a></li>
                        <li><a href="{{url("")}}">Sitemap</a></li>
                        <li><a href="{{url("")}}">FAQ</a></li>
                        <li><a href="{{url("")}}">Account</a></li>
                    </ul>
                </div>
                <div class="widget col-lg-3 col-md-3 col-sm-6">
                    <h5 class="widget-title">Gallery</h5>
                    <ul class="gallery custom-list row">
                        <li><a href="{{url("")}}"><img src="{{asset("img/gallery_footer.jpg")}}" alt=""></a></li>
                        <li><a href="{{url("")}}"><img src="{{asset("img/gallery_footer2.jpg")}}" alt=""></a></li>
                        <li><a href="{{url("")}}"><img src="{{asset("img/gallery_footer3.jpg")}}" alt=""></a></li>
                        <li><a href="{{url("")}}"><img src="{{asset("img/gallery_footer4.jpg")}}" alt=""></a></li>
                        <li><a href="{{url("")}}"><img src="{{asset("img/gallery_footer5.jpg")}}" alt=""></a></li>
                        <li><a href="{{url("")}}"><img src="{{asset("img/gallery_footer6.jpg")}}" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Footer-Top -->

            <!-- Start Sposnors -->
            <div class="sponsors clearfix">
                <h5 class="text-center">ДЕМЕУШІЛЕР</h5>
                <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
                    <img src="{{asset("img/partner.png")}}" alt="">
                </div>
                <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
                    <img src="{{asset("img/partner2.png")}}" alt="">
                </div>
                <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
                    <img src="{{asset("img/partner3.png")}}" alt="">
                </div>
                <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
                    <img src="{{asset("img/partner4.png")}}" alt="">
                </div>
                <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
                    <img src="{{asset("img/partner5.png")}}" alt="">
                </div>
                <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
                    <img src="{{asset("img/partner6.png")}}" alt="">
                </div>
            </div>
            <!-- End Sponsors -->

        </div>

        <!-- Start Copyrights -->
        <div class="copyrights clearfix text-center">
            <p class="col-lg-12">2018, Unity League, Барлық құқықтар қоғалған</p>
        </div>
        <!-- End Copyrights -->

    </footer>
    <!-- End Footer -->

    <!-- Start Back-to-Top -->
    <a href="{{url("")}}" id="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- End Back-to-Top -->


</div>
<!-- end #main-wrapper -->

<!-- Scripts -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/scripts.js")}}"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/jquery.ba-outside-events.min.js")}}"></script>
<script src="{{asset("js/tab.js")}}"></script>
<script src="{{asset("js/bootstrap-datepicker.js")}}"></script>
<script src="{{asset("js/tab.js")}}"></script>
<script src="{{asset("js/jquery.tweet.min.js")}}"></script>
<script src="{{asset("js/jquery.vide.min.js")}}"></script>
@yield('javascript')

</body>
</html>