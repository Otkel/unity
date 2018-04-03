@extends('main')
@section('css')
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
@endsection
@section('content')

    <!-- Start Intro -->
    <div class="intro">
        <div id="home-slider" class="fixed-nav owl-carousel owl-theme">
            <div class="item">

                <img src="{{asset("img/Image.png")}}" alt="" class="back">

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

@endsection