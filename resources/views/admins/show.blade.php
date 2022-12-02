@extends('admins.layout')
@section('content')
<div class="card">
  <div class="card-header">Admins Page</div>
  <div class="card-body">
      @foreach($admins as admim)
        <div class="card-body">
        <h5 class="card-title">Name : {{ $admin->fistname }}</h5>
        <p class="card-text">Address : {{ $admin->lastname }}</p>
        <p class="card-text">Gender: {{ $admin->Gender }}</p>
        <p class="card-text">Email : {{ $admin->email }}</p>
        <p class="card-text">Mobile : {{ $admin->phone }}</p>
        <p class="card-text">Department : {{ $admin->department }}</p>
        @endforeach
  </div>

    </hr>

  </div>
</div>
