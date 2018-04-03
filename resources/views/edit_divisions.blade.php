@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            @foreach($divisions as $division)
                <div class="border-dark">
                    <p class="text-dark">{{$division->name}}</p>
                    <a href="{{route("processEditDivisions",$division->id)}}">
                        <button class="btn-success">Edit</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection