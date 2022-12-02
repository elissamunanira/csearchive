@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">Welcome to CSE final year Project Archive</h1>
    @if (count($projects)>0)
        @foreach($projects as $project)
        
    <div class="container">
      <div class="row">
        <div class="col-md-4">
        <div class="d-flex justify-content-center align-items-center flex-wrap ">
          <div class="card mb-4 box-shadow">
            <div class="card-body">
                <h3 ><a href = "/projects/{{$project->id}}" style="text-decoration: none;">{{ $project->title }}</a></h3>
                    <p>This project is {{ $project->domain }} based</p>
                    <small class="text-muted">Written on {{$project->created_at}} supervised by {{$project->supervisor}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @else
        <h3>No projects available</h3>
    @endif

@endsection



