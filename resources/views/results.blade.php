@extends('main')
@section('content')

    <div  class="container">
        <div style="margin-top: 120px;" class="name-division">
            <h3>"NAME" Дивизионы</h3>
        </div>
        <div id="drops" class="row">
            <div id="dropik" class="col-sm-6">
                <div class="dropdown">
                    <button type="button"  class="btn " data-toggle="dropdown">
                        <h6 style="color: white"> Springcup 2018</h6>
                    </button>

                </div>
            </div>

            <div id="dropik" class="col-sm-6">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <h6 style="color: white">4 тур</h6>
                    </button>

                </div>
            </div>

        </div>
    </div>
    <div class="results" >
        <div class="main">
            <div id="row" class="row" >
                <div id="team1" class="col-sm-4 col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>Barselona</h5>
                </div>
                <div id="score" class="col-sm-2  col-12">
                    <h3>2:2</h3>
                </div>
                <div id="team1" class="col-sm-4  col-12">
                    <img src="{{asset('img/img/team2.png')}}">
                    <h5>FC Kairat</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="results" >
        <div class="main">
            <div id="row" class="row" >
                <div id="team2" class="col-sm-4 col-12">
                    <img src="{{asset('img/img/team3.png')}}">
                    <h5>FC Lorem ipsum</h5>
                </div>
                <div id="score2" class="col-sm-2  col-12">
                    <h3>3:1</h3>
                </div>
                <div id="team2" class="col-sm-4  col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>FC Milan</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="results" >
        <div class="main">
            <div id="row" class="row" >
                <div id="team1" class="col-sm-4 col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>Barselona</h5>
                </div>
                <div id="score" class="col-sm-2  col-12">
                    <h3>2:2</h3>
                </div>
                <div id="team1" class="col-sm-4  col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>FC Kairat</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="results" >
        <div class="main">
            <div id="row" class="row" >
                <div id="team2" class="col-sm-4 col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>FC Lorem ipsum</h5>
                </div>
                <div id="score2" class="col-sm-2  col-12">
                    <h3>3:1</h3>
                </div>
                <div id="team2" class="col-sm-4  col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>FC Milan</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="results" >
        <div class="main">
            <div id="row" class="row" >
                <div id="team1" class="col-sm-4 col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>Barselona</h5>
                </div>
                <div id="score" class="col-sm-2  col-12">
                    <h3>2:2</h3>
                </div>
                <div id="team1" class="col-sm-4  col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>FC Kairat</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="results" >
        <div class="main">
            <div id="row" class="row" >
                <div id="team2" class="col-sm-4 col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>FC Lorem ipsum</h5>
                </div>
                <div id="score2" class="col-sm-2  col-12">
                    <h3>3:1</h3>
                </div>
                <div id="team2" class="col-sm-4  col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>FC Milan</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="results" >
        <div class="main">
            <div id="row" class="row" >
                <div id="team1" class="col-sm-4 col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>Barselona</h5>
                </div>
                <div id="score" class="col-sm-2  col-12">
                    <h3>2:2</h3>
                </div>
                <div id="team1" class="col-sm-4  col-12">
                    <img src="{{asset('img/img/team1.png')}}">
                    <h5>FC Kairat</h5>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection