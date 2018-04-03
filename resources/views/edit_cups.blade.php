@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-5">
            @foreach($cups as $cup)
                <div class="border-dark">
                    <p class="text-dark">{{$cup->name}}</p>
                    <a href="{{route("processEditCups",$cup->id)}}">
                        <button class="btn-success">Edit</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection