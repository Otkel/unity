@extends('main')
@section('css')
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
@endsection
@section('content')

    <!-- Start Intro -->
    <div class="intro">
        <div id="home-slider" class="fixed-nav owl-carousel owl-theme">
            <div class="item">

                <img src="http://unity.bekzhan.kz/img/Image.png" alt="">

                <div class="slide-content col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 text-center">
                    <h1>КӨКТЕМГІ МАУСЫМ 2018</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="http://unity.bekzhan.kz" class="button"><span>ТОЛЫҒЫРАҚ</span></i></a>
                </div>
            </div>
            <div class="item">

                <img src="http://unity.bekzhan.kz/img/Image.png" alt="">

                <div class="slide-content col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 text-center">
                    <h1>КӨКТЕМГІ МАУСЫМ 2018</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="http://unity.bekzhan.kz" class="button"><span>ТОЛЫҒЫРАҚ</span></i></a>
                </div>
            </div>
            <div class="item">

                <img src="http://unity.bekzhan.kz/img/Image.png" alt="">

                <div class="slide-content col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 text-center">
                    <h1>КӨКТЕМГІ МАУСЫМ 2018</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="http://unity.bekzhan.kz" class="button"><span>ТОЛЫҒЫРАҚ</span></i></a>
                </div>
            </div><div class="item">

                <img src="http://unity.bekzhan.kz/img/Image.png" alt="">

                <div class="slide-content col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 text-center">
                    <h1>КӨКТЕМГІ МАУСЫМ 2018</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="http://unity.bekzhan.kz" class="button"><span>ТОЛЫҒЫРАҚ</span></a>
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

                    <a href="#"><img src="http://unity.bekzhan.kz/img/019-schalke-04.png" alt=""></a>


                    <a href="#"><img src="http://unity.bekzhan.kz/img/020-nantes.png" alt=""></a>


                    <a href="#"><img src="http://unity.bekzhan.kz/img/021-bayen-munchen.png" alt=""></a>


                    <a href="#"><img src="http://unity.bekzhan.kz/img/022-barcelona.png" alt=""></a>
                    <a href="#"><img src="http://unity.bekzhan.kz/img/024-borusia-monchengladbach.png" alt=""></a>
                    <a href="#"><img src="http://unity.bekzhan.kz/img/025-borusia-dortmund.png" alt=""></a>
                    <a href="#"><img src="http://unity.bekzhan.kz/img/026-bayern-leverkusen.png" alt=""></a>
                    <a href="#"><img src="http://unity.bekzhan.kz/img/027-atletico-de-madrid.png" alt=""></a>
                    <a href="#"><img src="http://unity.bekzhan.kz/img/028-roma.png" alt=""></a>
                    <a href="#"><img src="http://unity.bekzhan.kz/img/023-chelsea.png" alt=""></a>

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


                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team1.png">
                                    <h5>Barselona</h5>
                                </div>
                                <div id="score" class="col-sm-2 col-2">
                                    <h3>2:2</h3>
                                </div>
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team2.png">
                                    <h5>FC Kairat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team4.png">
                                    <h5>FC Lorem ipsum</h5>
                                </div>
                                <div id="score2" class="col-sm-2 col-2">
                                    <h3>3:1</h3>
                                </div>
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team3.png">
                                    <h5>FC Milan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team1.png">
                                    <h5>Barselona</h5>
                                </div>
                                <div id="score" class="col-sm-2 col-2">
                                    <h3>2:2</h3>
                                </div>
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team2.png">
                                    <h5>FC Kairat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team4.png">
                                    <h5>FC Lorem ipsum</h5>
                                </div>
                                <div id="score2" class="col-sm-2 col-2">
                                    <h3>3:1</h3>
                                </div>
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team3.png">
                                    <h5>FC Milan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team1.png">
                                    <h5>Barselona</h5>
                                </div>
                                <div id="score" class="col-sm-2 col-2">
                                    <h3>2:2</h3>
                                </div>
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team2.png">
                                    <h5>FC Kairat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team4.png">
                                    <h5>FC Lorem ipsum</h5>
                                </div>
                                <div id="score2" class="col-sm-2 col-2">
                                    <h3>3:1</h3>
                                </div>
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team3.png">
                                    <h5>FC Milan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team1.png">
                                    <h5>Bar</h5>
                                </div>
                                <div id="score" class="col-sm-2 col-2">
                                    <h3>2:2</h3>
                                </div>
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team2.png">
                                    <h5>FC Kairat</h5>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- End Matches -->

                <!-- Start Trainings -->
                <div class="tab-pane fade" id="trainings">
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team1.png">
                                    <h5>Barselona</h5>
                                </div>
                                <div id="score" class="col-sm-2 col-2">
                                    <h3>2:2</h3>
                                </div>
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team2.png">
                                    <h5>FC Kairat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team4.png">
                                    <h5>FC Lorem ipsum</h5>
                                </div>
                                <div id="score2" class="col-sm-2 col-2">
                                    <h3>3:1</h3>
                                </div>
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team3.png">
                                    <h5>FC Milan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team1.png">
                                    <h5>Barselona</h5>
                                </div>
                                <div id="score" class="col-sm-2 col-2">
                                    <h3>2:2</h3>
                                </div>
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team2.png">
                                    <h5>FC Kairat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team4.png">
                                    <h5>FC Lorem ipsum</h5>
                                </div>
                                <div id="score2" class="col-sm-2 col-2">
                                    <h3>3:1</h3>
                                </div>
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team3.png">
                                    <h5>FC Milan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team1.png">
                                    <h5>Barselona</h5>
                                </div>
                                <div id="score" class="col-sm-2 col-2">
                                    <h3>2:2</h3>
                                </div>
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team2.png">
                                    <h5>FC Kairat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team4.png">
                                    <h5>FC Lorem ipsum</h5>
                                </div>
                                <div id="score2" class="col-sm-2 col-2">
                                    <h3>3:1</h3>
                                </div>
                                <div id="team2" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team3.png">
                                    <h5>FC Milan</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="results" >
                        <div class="main">
                            <div id="row" class="row" >
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team1.png">
                                    <h5>Bar</h5>
                                </div>
                                <div id="score" class="col-sm-2 col-2">
                                    <h3>2:2</h3>
                                </div>
                                <div id="team1" class="col-sm-4 col-xs-1 col-4">
                                    <img src="img/img/team2.png">
                                    <h5>FC Kairat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Trainings -->

            </div>
        </div>
        <!-- End Tab-Content -->

    </div>
    <!-- End About -->
    <br>
    <!-- Start News -->
    <div id="news" class="news">
        <div class="container">

            <!-- Start Heading -->
            <div class="heading col-lg-12 col-md-12 col-sm-12 col-xs-6">
                <h4 class="border pull-left">Жаңалықтар</h4>
                <h6 class="border pull-right">Мұрағат</h6>

            </div>


            <!-- End Heading -->

            <!-- Start Single-News -->
            <div class="single-news col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <article>
                    <img src="img/gallery_footer.jpg"  alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="http://unity.bekzhan.kz">Lorem ipsum dolor sit amet 2018</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum! dolore eu fugiat nulla pariatur.</p>
                    </div>
                </article>
            </div>
            <!-- End Single-News -->



            <!-- Start Single-News -->
            <div class="single-news col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <article>
                    <img src="img/gallery_footer2.jpg" alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="http://unity.bekzhan.kz">Lorem ipsum dolor sit amet 2018</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum! dolore eu fugiat nulla pariatur.</p>
                    </div>
                </article>
            </div>

            <div class="single-news col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <article>
                    <img src="img/gallery_footer.jpg"  alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="http://unity.bekzhan.kz">Lorem ipsum dolor sit amet 2018</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum! dolore eu fugiat nulla pariatur.</p>
                    </div>
                </article>
            </div>
            <!-- End Single-News -->



            <!-- Start Single-News -->
            <div class="single-news col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <article>
                    <img src="img/gallery_footer2.jpg" alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="http://unity.bekzhan.kz">Lorem ipsum dolor sit amet 2018</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum! dolore eu fugiat nulla pariatur.</p>
                    </div>
                </article>
            </div>
            <div class="single-news col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <article>
                    <img src="img/gallery_footer.jpg"  alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="http://unity.bekzhan.kz">Lorem ipsum dolor sit amet 2018</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum! dolore eu fugiat nulla pariatur.</p>
                    </div>
                </article>
            </div>
            <!-- End Single-News -->



            <!-- Start Single-News -->
            <div class="single-news col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <article>
                    <img src="img/gallery_footer2.jpg" alt="" class="thumbnail">
                    <div class="article-content">
                        <h5><a href="http://unity.bekzhan.kz">Lorem ipsum dolor sit amet 2018</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum! dolore eu fugiat nulla pariatur.</p>
                    </div>
                </article>
            </div>

            <!-- End Single-News -->

        </div>
    </div>
    <!-- End News -->



@endsection