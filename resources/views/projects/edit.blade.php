
@extends('layouts.app')

@section('content')
    <h1>Update this Project</h1>
    <form action="{{ url('projets/'.$project->id) }}" method="post"enctype="multipart/form-data">
        {!!csrf_field() !!}
        @method('PATCH')
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{Form::text('title',$project->title,['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'title'])}}
        </div>
        <div class="form-group">
            {{ Form::label('abstract', 'Abstract')}}
            {{Form::textarea('abstract',$project->abstract,['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Abstract'])}}
        </div>
        <div class="form-group">
            {{ Form::label('owner', 'owner(student name')}}
            {{Form::text('owner',$project->owner,['class' => 'form-control', 'placeholder' => 'owner'])}}
        </div>
        <div class="form-group">
            {{ Form::label('department', 'department')}}
            {{Form::text('department',$project->department,['class' => 'form-control', 'placeholder' => 'department'])}}
        </div>
        <div class="form-group">
            {{ Form::label('domain', 'domain')}}
            {{Form::text('domain',$project->domain,['class' => 'form-control', 'placeholder' => 'domain'])}}
        </div>
        <div class="form-group">
            {{ Form::label('supervisor', 'supervisor')}}
            {{Form::text('supervisor',$project->supervisor,['class' => 'form-control', 'placeholder' => 'supervisor'])}}
        </div>
        <div class="form-group">
            {{Form::file('pdf_version')}}
        </div>
        <input type="submit" name="submit" value="Save" class="btn btn-success">
    </form>
@endsection
