@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            @foreach($games as $game)
                <div class="border-dark">
                    <div>
                        <p>{{$game->team1_id}}</p>
                        <p>{{$game->team2_id}}</p>
                    </div>
                    <p class="text-dark">{{$game->date}}</p>
                    <a href="{{route("processEditGames",$game->id)}}">
                        <button class="btn-success">Edit</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection