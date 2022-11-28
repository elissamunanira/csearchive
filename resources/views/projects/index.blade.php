@extends('layouts.app')

@section('content')
    <h1>Welcome to CSE final year Project Archive</h1>
    @if (count($projects)>0)
        @foreach($projects as $project)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href = "/projects/{{$project->id}}">{{ $project->title }}</a></h3>
                        <p>This project is {{ $project->domain }} based</p>
                        <small>Written on {{$project->created_at}} supervised by {{$project->supervisor}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        <hr>
    @else
        <h3>No projects available</h3>
    @endif
@endsection
