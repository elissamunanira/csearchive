{{-- @extends('layouts.app')

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

                         @if(count($projects)> 0)
                            <table class="table table-striped ">
                                     <tr>
                                         <th>Title</th>
                                         <th></th>
                                          <th></th>
                                     </tr>
                                @foreach ( $projects as $project)
                                     <tr>
                                         <td>{{ $project->title }}</td>
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
@endsection --}}

@extends('layouts.app')
@section('content')
  <body>

{{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">CSEARCHIVE</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->firstname }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('home')}}">Dashboard</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
  </div>
</header> --}}

<div class="container-fluid" style="margin-left: -20;">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-project">
            <a class="nav-link active" aria-current="page" href="home">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-project">
            <a class="nav-link" href="/projects">
              <span data-feather="file" class="align-text-bottom"></span>
              Manage Projects
            </a>
          </li>
          <li class="nav-project">
            <a class="nav-link" href="/users">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              MANAGE USERS
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-projects-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved projects</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-project">
              <a class="nav-link" href="#">
                <span data-feather="file-text" class="align-text-bottom"></span>
                WEB Based
              </a>
            </li>
        <ul class="nav flex-column mb-2">
          <li class="nav-project">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              IOT Based
            </a>
          </li>
          <li class="nav-project">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Mobile Based
            </a>
          </li>
          <li class="nav-project">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              ML based
            </a>
          </li>
          <li class="nav-project">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              All Projects
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-projects-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>
{{--
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

      <a href="/projects/create" class="btn btn-primary">ADD NEW PROJECT</a>
      <center><h2>The created projects</h2></center>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">P_ID</th>
              <th scope="col">TITLE</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            {{-- @if(!empty($projects)) --}}
            @foreach($project as $project)
            <tr>
                <td>{{ $project->id}}</td>
                <td>{{ $project->title }}</td>
                <td>
                    <a href="{{ url('/projects/' . $project->id) }}" title="View project"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    <a href="{{ url('/projects/' . $project->id . '/edit') }}" title="Edit project"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    <form method="POST" action="{{ url('/projects' . '/' . $project->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete project" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        {{-- @endif --}}
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
@endsection

