@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="pannel-body">
                         <a href="/projects/create" class="btn btn-primary">Create a project</a>
                         <h3>Your Blogs</h3>

                         @if(count([$projects])> 0)
                            <table class="table table-striped ">
                                     <tr>
                                         <th>Title</th>
                                         <th></th>
                                          <th></th>
                                     </tr>
                                @foreach ( [$projects] as [$project])
                                     <tr>
                                         <td>{{ [$project]->title }}</td>
                                         <td><a href="/projects/{{$project->id}}/edit"class= "btn btn-primary">Edit</a></td>
                                     </tr>

                                 @endforeach
                             </table>
                         @else
                             <div class="alert alert-danger" role="alert">No projects Found</div>
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
