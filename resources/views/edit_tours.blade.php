@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            @foreach($tours as $tour)
                <div class="border-dark">
                    <p class="text-dark">{{$tour->number}}</p>
                    <a href="{{route("processEditTours",$tour->id)}}">
                        <button class="btn-success">Edit</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection