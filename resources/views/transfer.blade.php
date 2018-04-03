@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            <div class="form-area">
                <form method="POST" action="{{route("processMakeTransfer")}}">
                    {{ csrf_field() }}
                    <br style="clear:both">
                    <div class="form-control h-25">
                        <input id="date" name="date" type="date">
                    </div>
                    <div class="form-control">
                        <select name="player">
                            @foreach($players as $player)
                                <option value="{{$player->id}}"> {{$player->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <select name="category1">
                            @foreach($teams as $team)
                                <option value="{{$team->id}}"> {{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <select name="category2">
                            @foreach($teams as $team)
                                <option value="{{$team->id}}"> {{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection