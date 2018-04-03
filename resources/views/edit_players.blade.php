@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            @foreach($players as $player)
                <div class="border-dark">
                    <p class="text-dark">{{$player->name}}</p>
                    <p class="text-dark">{{$player->surname}}</p>
                    <a href="{{route("processEditPlayers",$player->id)}}">
                        <button class="btn-success">Edit</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection