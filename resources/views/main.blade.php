<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Unity Football League</title>

    <!-- Stylesheets -->
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

    <!-- Start Intro -->
    <div class="intro">
        <div id="home-slider" class="fixed-nav owl-carousel owl-theme">
            <div class="item">

                <img src="{{asset("img/Image.png")}}" alt="">

                <div class="slide-content col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 text-center">
                    <h1>КӨКТЕМГІ МАУСЫМ 2018</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="{{url("")}}" class="button"><span>ТОЛЫҒЫРАҚ</span></i></a>
                </div>
            </div>
            <div class="item">

                <img src="{{asset("img/Image.png")}}" alt="">

                <div class="slide-content col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 text-center">
                    <h1>КӨКТЕМГІ МАУСЫМ 2018</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="{{url("")}}" class="button"><span>ТОЛЫҒЫРАҚ</span></i></a>
                </div>
            </div>
            <div class="item">

                <img src="{{asset("img/Image.png")}}" alt="">

                <div class="slide-content col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 text-center">
                    <h1>КӨКТЕМГІ МАУСЫМ 2018</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="{{url("")}}" class="button"><span>ТОЛЫҒЫРАҚ</span></i></a>
                </div>
            </div><div class="item">

                <img src="{{asset("img/Image.png")}}" alt="">

                <div class="slide-content col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 text-center">
                    <h1>КӨКТЕМГІ МАУСЫМ 2018</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="{{url("")}}" class="button"><span>ТОЛЫҒЫРАҚ</span></a>
                </div>
            </div>
           
        </div>
        <div class="customNavigation">
            <a class="btn prev"><i class="fa fa-angle-left"></i></a>
            <a class="btn next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <!-- End Intro -->

    <!-- Start About -->
    <div id="about" class="about">

        <!-- Start Container -->
        <div class="container">

            <!-- Start Preamble -->
            <div class="preamble text-center col-lg-10 col-lg-offset-1">
                <p class="league-head-text">ПРЕМЬЕР ДИВИЗИОН <span class="fa fa-caret-down"></span></p>
                <div class="row team-logos">

                        <a href="#"><img src="{{asset("img/019-schalke-04.png")}}" alt=""></a>


                        <a href="#"><img src="{{asset("img/020-nantes.png")}}" alt=""></a>


                        <a href="#"><img src="{{asset("img/021-bayen-munchen.png")}}" alt=""></a>


                        <a href="#"><img src="{{asset("img/022-barcelona.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("img/024-borusia-monchengladbach.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("img/025-borusia-dortmund.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("img/026-bayern-leverkusen.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("img/027-atletico-de-madrid.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("img/028-roma.png")}}" alt=""></a>
                        <a href="#"><img src="{{asset("img/023-chelsea.png")}}" alt=""></a>

                </div>
            </div>
            <!-- End Preamble -->

        </div>
        <!-- End Container -->

        <!-- Start Nav-Tabs -->
        <ul class="nav nav-tabs list-inline horizontal-tab" role="tablist">
            <li class="active"><a href="#matches" role="tab" data-toggle="tab">Matches</a>
            </li>
            <li class=""><a href="#trainings" role="tab" data-toggle="tab">Trainings</a>
            </li>
        </ul>
        <!-- End Nav-Tabs -->

        <!-- Start Tab-Content -->
        <div class="tab-content">
            <div class="container">
                <div class="tab-pane fade active in" id="matches">

                    <!-- Start Nav-Tabs -->
                    <ul class="nav nav-tabs list-inline experience" role="tablist">
                        <li class="active"><a href="#seniors-matches" role="tab" data-toggle="tab">Seniors</a>
                        </li>
                        <li class=""><a href="#juvenile-matches" role="tab" data-toggle="tab">Juvenile</a>
                        </li>
                        <li class=""><a href="#veterans-matches" role="tab" data-toggle="tab">Veterans</a>
                        </li>
                    </ul>
                    <!-- End Nav-Tabs -->

                    <!-- Start Tab Seniors -->
                    <div class="tab-pane fade active in" id="seniors-matches">

                        <!-- Start Result -->
                        <div class="result col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 clearfix">
                            <h4 class="border">Latest Result</h4>
                            <div class="team">
                                <figure>
                                    <img src="{{asset("img/team1.jpg")}}" alt="" class="team-background">
                                    <img src="{{asset("img/team1-Logo.png")}}" alt="" class="team-logo">
                                    <figcaption>
                                        FC Lorem
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="match-details">
                                <header class="match-name"><h5>Match 4</h5></header>
                                <div class="score">
                                    <span class="color">1</span>
                                    <span>:</span>
                                    <span>1</span>
                                </div>
                                <footer class="schedule">
                                    <span class="team-name">Sao Paolo</span>
                                    <span class="time">30 May 23:00</span>
                                </footer>
                            </div>
                            <div class="team">
                                <figure>
                                    <img src="{{asset("img/team2.jpg")}}" alt="" class="team-background">
                                    <img src="{{asset("img/team2-logo.png")}}" alt="" class="team-logo">
                                    <figcaption>
                                        AFC Ipsum
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- End Result -->

                        <!-- Start Upcoming -->
                        <div class="upcoming col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 clearfix">
                            <h4 class="border">Upcoming Matches</h4>
                            <ul class="matches custom-list">
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming.png")}}" alt=""><span>AFC Consequat</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta FC</span>
                                        <img src="{{asset("img/team-upcoming2.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming3.png")}}" alt=""><span>Andrea FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta United</span>
                                        <img src="{{asset("img/team-upcoming4.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming5.png")}}" alt=""><span>Xavier United</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Altair FC</span>
                                        <img src="{{asset("img/team-upcoming6.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming7.png")}}" alt=""><span>Azkalz FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Juggernaut</span>
                                        <img src="{{asset("img/team-upcoming8.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming3.png")}}" alt=""><span>Andrea FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta United</span>
                                        <img src="{{asset("img/team-upcoming4.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming5.png")}}" alt=""><span>Xavier United</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Altair FC</span>
                                        <img src="{{asset("img/team-upcoming6.png")}}" alt="">
                                    </div>
                                </li>
                            </ul>
                            <a class="button text-left prev"><i class="fa fa-angle-left"></i><span>Previous</span></a>
                            <div class="match-week">
                                <div class="datepicker-inner" data-date="12/03/2012">Week <span class="count">7</span><i class="fa fa-angle-down"></i></div>
                            </div>
                            <a class="button text-right next"><span>Next</span><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- End Upcoming -->

                    </div>
                    <!-- End Tab Seniors -->

                    <!-- Start Tab Juvenile -->
                    <div class="tab-pane fade" id="juvenile-matches">

                        <!-- Start Result -->
                        <div class="result col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 clearfix">
                            <h4 class="border">Latest Result</h4>
                            <div class="team">
                                <figure>
                                    <img src="{{asset("img/team1.jpg")}}" alt="" class="team-background">
                                    <img src="{{asset("img/team1-logo.png")}}" alt="" class="team-logo">
                                    <figcaption>
                                        FC Lorem
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="match-details">
                                <header class="match-name"><h5>Match 4</h5></header>
                                <div class="score">
                                    <span class="color">2</span>
                                    <span>:</span>
                                    <span>1</span>
                                </div>
                                <footer class="schedule">
                                    <span class="team-name">Sao Paolo</span>
                                    <span class="time">30 May 23:00</span>
                                </footer>
                            </div>
                            <div class="team">
                                <figure>
                                    <img src="{{asset("img/team2.jpg")}}" alt="" class="team-background">
                                    <img src="{{asset("img/team2-logo.png")}}" alt="" class="team-logo">
                                    <figcaption>
                                        AFC Ipsum
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- End Result -->

                        <!-- Start Upcoming -->
                        <div class="upcoming col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 clearfix">
                            <h4 class="border">Upcoming Matches</h4>
                            <ul class="matches custom-list">
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming3.png")}}" alt=""><span>Andrea FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta United</span>
                                        <img src="{{asset("img/team-upcoming4.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming.png")}}" alt=""><span>AFC Consequat</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta FC</span>
                                        <img src="{{asset("img/team-upcoming2.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming5.png")}}" alt=""><span>Xavier United</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Altair FC</span>
                                        <img src="{{asset("img/team-upcoming6.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming7.png")}}" alt=""><span>Azkalz FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Juggernaut</span>
                                        <img src="{{asset("img/team-upcoming8.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming3.png")}}" alt=""><span>Andrea FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta United</span>
                                        <img src="{{asset("img/team-upcoming4.png")}}" alt="">
                                    </div>
                                </li>
                            </ul>
                            <a class="button text-left prev"><i class="fa fa-angle-left"></i><span>Previous</span></a>
                            <div class="match-week">
                                <div class="datepicker-inner" data-date="12/03/2012">Week <span class="count">7</span><i class="fa fa-angle-down"></i></div>
                            </div>
                            <a class="button text-right next"><span>Next</span><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- End Upcoming -->

                    </div>
                    <!-- End Tab Juvenile -->

                    <!-- Start Tab Veterans -->
                    <div class="tab-pane fade" id="veterans-matches">

                        <!-- Start Result -->
                        <div class="result col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 clearfix">
                            <h4 class="border">Latest Result</h4>
                            <div class="team">
                                <figure>
                                    <img src="{{asset("img/team1.jpg")}}" alt="" class="team-background">
                                    <img src="{{asset("img/team1-logo.png")}}" alt="" class="team-logo">
                                    <figcaption>
                                        FC Lorem
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="match-details">
                                <header class="match-name"><h5>Match 1</h5></header>
                                <div class="score">
                                    <span class="color">5</span>
                                    <span>:</span>
                                    <span>3</span>
                                </div>
                                <footer class="schedule">
                                    <span class="team-name">Sao Paolo</span>
                                    <span class="time">30 May 23:00</span>
                                </footer>
                            </div>
                            <div class="team">
                                <figure>
                                    <img src="{{asset("img/team2.jpg")}}" alt="" class="team-background">
                                    <img src="{{asset("img/team2-logo.png")}}" alt="" class="team-logo">
                                    <figcaption>
                                        AFC Ipsum
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- End Result -->

                        <!-- Start Upcoming -->
                        <div class="upcoming col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 clearfix">
                            <h4 class="border">Upcoming Matches</h4>
                            <ul class="matches custom-list">
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming7.png")}}" alt=""><span>Azkalz FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Juggernaut</span>
                                        <img src="{{asset("img/team-upcoming8.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming3.png")}}" alt=""><span>Andrea FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta United</span>
                                        <img src="{{asset("img/team-upcoming4.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming5.png")}}" alt=""><span>Xavier United</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Altair FC</span>
                                        <img src="{{asset("img/team-upcoming6.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming.png")}}" alt=""><span>AFC Consequat</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta FC</span>
                                        <img src="{{asset("img/team-upcoming2.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming3.png")}}" alt=""><span>Andrea FC</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Magenta United</span>
                                        <img src="{{asset("img/team-upcoming4.png")}}" alt="">
                                    </div>
                                </li>
                                <li class="match">
                                    <div class="team text-left">
                                        <img src="{{asset("img/team-upcoming5.png")}}" alt=""><span>Xavier United</span>
                                    </div>
                                    <div class="schedule">
                                        <span class="team-name">Sao Paolo</span>
                                        <span class="time">30 May 23:00</span>
                                    </div>
                                    <div class="team right text-right">
                                        <span>Altair FC</span>
                                        <img src="{{asset("img/team-upcoming6.png")}}" alt="">
                                    </div>
                                </li>
                            </ul>
                            <a class="button text-left prev"><i class="fa fa-angle-left"></i><span>Previous</span></a>
                            <div class="match-week">
                                <div class="datepicker-inner" data-date="12/03/2012">Week <span class="count">7</span><i class="fa fa-angle-down"></i></div>
                            </div>
                            <a class="button text-right next"><span>Next</span><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- End Upcoming -->

                    </div>
                    <!-- End Tab Veterans -->

                </div>
                <!-- End Matches -->

                <!-- Start Trainings -->
                <div class="tab-pane fade" id="trainings">

                    <!-- Start Nav-Tabs -->
                    <ul class="nav nav-tabs list-inline experience" role="tablist">
                        <li class="active"><a href="#seniors-trainings" role="tab" data-toggle="tab">Seniors</a>
                        </li>
                        <li class=""><a href="#juvenile-trainings" role="tab" data-toggle="tab">Juvenile</a>
                        </li>
                        <li class=""><a href="#veterans-trainings" role="tab" data-toggle="tab">Veterans</a>
                        </li>
                    </ul>
                    <!-- End Nav-Tabs -->

                    <!-- Start Tab Seniors -->
                    <div class="tab-pane fade active in" id="seniors-trainings">
                        <div class="training-header col-lg-12 col-md-12 col-sm-12">
                            <h4 class="border pull-left">Team 5 in Last 6 games</h4>
                            <div class="training-dropdown pull-right">
                                <select class="" data-placeholder="2014 Training Schedule">
                                    <option value="option1">2015 Training Schedule</option>
                                    <option value="option2">2016 Training Schedule</option>
                                    <option value="option3">2017 Training Schedule</option>
                                    <option value="option4">2018 Training Schedule</option>
                                </select>
                            </div>
                        </div>
                        <div class="training-table col-lg-12 col-md-12 col-xs-12">
                            <header>
                                <a href="{{url("")}}" class="button prev pull-left"><i class="fa fa-arrow-circle-left"></i><span>Previous</span></a>
                                <h5>2014 training schedule (all times central)</h5>
                                <a href="{{url("")}}" class="button next pull-right"><span>Next</span><i class="fa fa-arrow-circle-right"></i></a>
                            </header>
                            <table class="table">
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3">Day</th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">Date</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">Practice Time/Notes</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Morning Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Friday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 25</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Saturday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 26</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Sunday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 27</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Offensive Line</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Monday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 28</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Tuesday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 29</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">No practice  - closed to the public</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Defensive Backs</th>
                                </tr>
                            </table>
                            <footer>
                                <span>All practices will take place at Estadio Azteca in Mexico, unless noted.Practice dates and times are subject to change at any time.</span>
                            </footer>
                        </div>
                    </div>
                    <!-- End Tab Seniors -->

                    <!-- Start Tab Juvenile -->
                    <div class="tab-pane fade" id="juvenile-trainings">
                        <div class="training-header col-lg-12 col-md-12 col-xs-12">
                            <h4 class="border pull-left">Team 12 in Last 6 games</h4>
                            <div class="training-dropdown pull-right">
                                <select class="" data-placeholder="2014 Training Schedule">
                                    <option value="option1">2015 Training Schedule</option>
                                    <option value="option2">2016 Training Schedule</option>
                                    <option value="option3">2017 Training Schedule</option>
                                    <option value="option4">2018 Training Schedule</option>
                                </select>
                            </div>
                        </div>
                        <div class="training-table col-lg-12 col-md-12 col-xs-12">
                            <header>
                                <a href="{{url("")}}" class="button prev pull-left"><i class="fa fa-arrow-circle-left"></i><span>Previous</span></a>
                                <h5>2014 training schedule (all times central)</h5>
                                <a href="{{url("")}}" class="button next pull-right"><span>Next</span><i class="fa fa-arrow-circle-right"></i></a>
                            </header>
                            <table class="table">
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3">Day</th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">Date</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">Practice Time/Notes</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Morning Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Friday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 25</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Saturday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 26</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Sunday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 27</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Offensive Line</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Monday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 28</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Tuesday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 29</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">No practice  - closed to the public</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Defensive Backs</th>
                                </tr>
                            </table>
                            <footer>
                                <span>All practices will take place at Estadio Azteca in Mexico, unless noted.Practice dates and times are subject to change at any time.</span>
                            </footer>
                        </div>
                    </div>
                    <!-- End Tab Juvenile -->

                    <!-- Start Tab Veterans -->
                    <div class="tab-pane fade" id="veterans-trainings">
                        <div class="training-header col-lg-12 col-md-12 col-xs-12">
                            <h4 class="border pull-left">Team 21 in Last 6 games</h4>
                            <div class="training-dropdown pull-right">
                                <select class="" data-placeholder="2014 Training Schedule">
                                    <option value="option1">2015 Training Schedule</option>
                                    <option value="option2">2016 Training Schedule</option>
                                    <option value="option3">2017 Training Schedule</option>
                                    <option value="option4">2018 Training Schedule</option>
                                </select>
                            </div>
                        </div>
                        <div class="training-table col-lg-12 col-md-12 col-xs-12">
                            <header>
                                <a href="{{url("")}}" class="button prev pull-left"><i class="fa fa-arrow-circle-left"></i><span>Previous</span></a>
                                <h5>2014 training schedule (all times central)</h5>
                                <a href="{{url("")}}" class="button next pull-right"><span>Next</span><i class="fa fa-arrow-circle-right"></i></a>
                            </header>
                            <table class="table">
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3">Day</th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">Date</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">Practice Time/Notes</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Morning Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Friday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 25</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Saturday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 26</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Sunday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 27</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Offensive Line</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Monday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 28</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">9:00 - 11:30 am</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">No Autographs</th>
                                </tr>
                                <tr>
                                    <th class="col-lg-3 col-md-3 col-xs-3"><strong>Tuesday</strong></th>
                                    <th class="col-lg-3 col-md-3 col-xs-3">July 29</th>
                                    <th class="col-lg-4 col-md-4 col-xs-4">No practice  - closed to the public</th>
                                    <th class="col-lg-2 col-md-2 col-xs-2">Defensive Backs</th>
                                </tr>
                            </table>
                            <footer>
                                <span>All practices will take place at Estadio Azteca in Mexico, unless noted.Practice dates and times are subject to change at any time.</span>
                            </footer>
                        </div>
                    </div>
                    <!-- End Tab Veterans -->

                </div>
                <!-- End Trainings -->

            </div>
        </div>
        <!-- End Tab-Content -->

    </div>
    <!-- End About -->

    <!-- Start Teams -->
    <div id="teams" class="teams">
        <div class="container">

            <!-- Start Heading -->
            <div class="heading col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4 class="border">Our Teams</h4>
            </div>
            <!-- End Heading -->

            <!-- Start Teams-Frame -->
            <div class="teams-frame col-lg-12">

                <!-- Start Nav-Tabs -->
                <ul class="nav nav-tabs vertical-tab col-md-12" role="tablist">
                    <li class="active"><a href="#senior-team" role="tab" data-toggle="tab">Senior</a>
                    </li>
                    <li class=""><a href="#juveline-team" role="tab" data-toggle="tab">Juveline</a>
                    </li>
                    <li class=""><a href="#veteran-team" role="tab" data-toggle="tab">Veteran</a>
                    </li>
                </ul>
                <!-- End Nav-Tabs -->

                <!-- Start Tab Seniors -->
                <div class="tab-pane fade active in" id="senior-team">

                    <!-- Start Team-Players -->
                    <div class="team-players">
                        <div class="player-profile">
                            <img src="{{asset("img/team-player6.jpg")}}" alt="" class="thumbnail">
                            <span class="number">21</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">11</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">14</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player9.jpg")}}" alt="" class="thumbnail">
                            <span class="number">18</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">19</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">6</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">4</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">23</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">21</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">22</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">33</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player6.jpg")}}" alt="" class="thumbnail">
                            <span class="number">9</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">19</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player9.jpg")}}" alt="" class="thumbnail">
                            <span class="number">17</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">13</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">45</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">11</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">15</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                    </div>
                    <!-- End Team-Players -->

                </div>
                <!-- End Tab Seniors -->

                <!-- Start Tab Juveline -->
                <div class="tab-pane fade" id="juveline-team">

                    <!-- Start Team-Players -->
                    <div class="team-players">
                        <div class="player-profile">
                            <img src="{{asset("img/team-player6.jpg")}}" alt="" class="thumbnail">
                            <span class="number">21</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">11</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">14</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player9.jpg")}}" alt="" class="thumbnail">
                            <span class="number">18</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">19</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">6</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">4</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">13</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">45</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">11</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">23</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">21</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">22</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">33</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player6.jpg")}}" alt="" class="thumbnail">
                            <span class="number">9</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">15</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">19</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player9.jpg")}}" alt="" class="thumbnail">
                            <span class="number">17</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                    </div>
                    <!-- End Team-Players -->

                </div>
                <!-- End Tab Juveline -->

                <!-- Start Tab Veteran -->
                <div class="tab-pane fade" id="veteran-team">

                    <!-- Start Team-Players -->
                    <div class="team-players">
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">33</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player6.jpg")}}" alt="" class="thumbnail">
                            <span class="number">9</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">19</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player9.jpg")}}" alt="" class="thumbnail">
                            <span class="number">17</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">13</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">45</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">15</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">11</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player6.jpg")}}" alt="" class="thumbnail">
                            <span class="number">21</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">11</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">14</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player9.jpg")}}" alt="" class="thumbnail">
                            <span class="number">18</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">19</span>
                            <span class="name">Ola Nordmann</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">6</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player8.jpg")}}" alt="" class="thumbnail">
                            <span class="number">4</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player11.jpg")}}" alt="" class="thumbnail">
                            <span class="number">23</span>
                            <span class="name">Hong Gildong</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player10.jpg")}}" alt="" class="thumbnail">
                            <span class="number">21</span>
                            <span class="name">Ican Ivanovich</span>
                        </div>
                        <div class="player-profile">
                            <img src="{{asset("img/team-player7.jpg")}}" alt="" class="thumbnail">
                            <span class="number">22</span>
                            <span class="name">Mathieu Debuchy</span>
                        </div>
                    </div>
                    <!-- End Team-Players -->

                </div>
                <!-- End Tab Veteran -->

            </div>
            <!-- End Teams-Frame -->

        </div>
    </div>
    <!-- End Teams -->

    <!-- Start News -->
    <div id="news" class="news">
        <div class="container">

            <!-- Start Heading -->
            <div class="heading col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4 class="border pull-left">Latest News</h4>
                <a href="{{url("")}}" class="rest pull-right"><span>See all news</span><i class="fa fa-arrow-circle-right"></i></a>
            </div>
            <!-- End Heading -->

            <!-- Start Single-News -->
            <div class="single-news col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <article>
                    <img src="{{asset("img/article-thumbnail.jpg")}}" alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="{{url("")}}">#AFCvHCFC: live audio on Arsenal Player</a></h5>
                        <p>Theo Walcott and Serge Gnabry in line to make return to action for club's second string at Meadow Park on Friday evening</p>
                    </div>
                </article>
            </div>
            <!-- End Single-News -->

            <!-- Start Single-News -->
            <div class="single-news col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <article>
                    <img src="{{asset("img/article-thumbnail2.jpg")}}" alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="{{url("")}}">Welbeck - I’m loving this new adventure</a></h5>
                        <p>Theo Walcott and Serge Gnabry in line to make return to action for club's second string at Meadow Park on Friday evening</p>
                    </div>
                </article>
            </div>
            <!-- End Single-News -->

            <!-- Start Single-News -->
            <div class="single-news col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <article>
                    <img src="{{asset("img/article-thumbnail3.jpg")}}" alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="{{url("")}}">#AFCvHCFC: live audio on Arsenal Player</a></h5>
                        <p>Theo Walcott and Serge Gnabry in line to make return to action for club's second string at Meadow Park on Friday evening</p>
                    </div>
                </article>
            </div>
            <!-- End Single-News -->

        </div>
    </div>
    <!-- End News -->

    <!-- Start Twitter -->
    <div class="twitter-widget loading">
        <div class="container">
            <div class="col-lg-12">
                <i class="fa fa-twitter"></i>
                <div class="widget-content">
                    <div class="twitter-feed paginated" data-id="uouapps" data-limit="3" data-interval="0"><span class="loading-anim"><span></span></span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Twitter -->

    <!-- Start Footer -->
    <footer id="footer">
        <div class="container">

            <!-- Start Footer-Top -->
            <div class="footer-top clearfix">
                <div class="widget col-lg-3 col-md-3 col-sm-6">
                    <h5 class="widget-title">About FC</h5>
                    <p>Lorem ipsum dolor sit amet consete adipisicing elit. Proin nibh augue.</p>
                    <ul class="contact-info custom-list">
                        <li><i class="fa fa-map-marker"></i><span>10 Milk Street #230 Boston, MA 02108</span></li>
                        <li><i class="fa fa-phone"></i><span>+1 (123) 456-7890</span></li>
                        <li><i class="fa fa-envelope"></i><span><a href="mailto:example@example.com">example@example.com</a></span></li>
                    </ul>
                </div>
                <div class="widget col-lg-3 col-md-3 col-sm-6">
                    <h5 class="widget-title">Information</h5>
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
                    <h5 class="widget-title">Support</h5>
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
                <h5 class="text-center">Sponsors</h5>
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
            <p class="col-lg-12">© Copyright 2014 FC Theme. All Rights Reserved</p>
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


</body>
</html>