@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')

    <div class="row" id="dashboard">
        <ul class="breadcrumb">
            <li>Users</li>
        </ul>

        <div class="small-8 columns">
            <div class="panel">
                <h3>Welcome, {{$name}}</h3><hr>
                <p>Current Schedule</p>
            </div>
        </div>
        <div class="small-4 columns">
            <div class="panel">
                <h3>Annoucements</h3><hr>
            </div>
        </div>
    </div>

@endsection