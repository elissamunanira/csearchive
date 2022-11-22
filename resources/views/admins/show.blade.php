@extends('admins.layout')
@section('content')
<div class="card">
  <div class="card-header">Admins Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Name : {{ $admins->fistname }}</h5>
        <p class="card-text">Address : {{ $admins->lastname }}</p>
        <p class="card-text">Gender: {{ $admins->Gender }}</p>
        <p class="card-text">Email : {{ $admins->email }}</p>
        <p class="card-text">Mobile : {{ $admins->phone }}</p>
        <p class="card-text">Department : {{ $admins->department }}</p>
  </div>

    </hr>

  </div>
</div>
