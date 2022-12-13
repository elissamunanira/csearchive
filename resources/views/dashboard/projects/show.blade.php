@extends('layouts.app')

@section('content')
<div class="container">
<a href="/projects"class="btn btn-default ">GO BACK</a>
    <h1>{{$project->title}}</h1>
    <div>
       <p class="lead my-3" > {{$project->abstract}} </p>
    </div>
    <hr>
    <small>Written on {{$project->created_at}} supervised by {{$project->supervisor}} and is owned to {{$project->owner}}</small><br>
    @if(!Auth::guest())
        @if(Auth::user()->id == $project->user_id)
            <a href="/projects/{{$project->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['Action' => 'ProjectsController@destroy', 'method'=>'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class'=> 'btn btn-danger']) }}
            {!!Form::close()!!}

        @endif
    @endif
    <a href="/public/storage/pdf_files/{{$project->pdf_version}}" download="{{$project->pdf_version}}"class="btn btn-info">DOWNLOAD </a>
</div>
@endsection

