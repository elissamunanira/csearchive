@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">Welcome to CSE final year Project Archive</h1>
    @if (count($projects)>0)
        @foreach($projects as $project)

    <div class="container">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                     <div class="card-body">
                     <h3 ><a href = "/projects/{{$project->id}}" style="text-decoration: none;">{{ $project->title }}</a></h3>
                    <p >This project is {{ $project->domain }} based</p>
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
    <a href="">Back to top</a>
@endsection



