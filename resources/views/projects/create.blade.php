@extends('layouts.app')

@section('content')
    <form action="{{url('projects')}}" method="post" enctype="multipart/form-data">
        {!!csrf_field() !!}
        <h1>Insert New Project</h1>
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter the project title" required>

        <div class="form-group">
            {{ Form::label('abstract', 'abstract')}}
             {{Form::textarea('abstract','',['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Abstract'])}}
          </div>
        <label for="owner">Owner(student)</label>
        <input type="text" name="owner" class="form-control" placeholder="Type the owner of that project" required>
        <label for="accademic_year">Accademic year</label>
        <input type="accademic_year" name="accademic year" class="form-control" placeholder="Enter the project title" required>
        <label for="department">Department</label>
        <input type="department" name="department" class="form-control" placeholder="Enter the project title" required>
        <label for="domain">Domain</label>
        <input type="domain" name="domain" id="domain"class="form-control" placeholder="Enter the project title" required>
        <label for="supervisor">Name of supervisor</label>
        <input type="supervisor" name="supervisor" class="form-control" placeholder="Enter the project title" required>
        <div class="form-group">
            {{Form::file('pdf_version')}}
         </div>
        <input type="submit" name="submit" value="updoad" class="btn btn-success">
    </form>
@endsection
