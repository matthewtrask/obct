@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')

    <div class="row" id="dashboard">

        <div class="small-8 columns">
            <div class="panel">
                <h3>Welcome, {{$user->name}}</h3><hr>
                <p>Current Schedule</p>
            </div>
        </div>
        <div class="small-4 columns">
            <div class="panel">
                <h3>Annoucements</h3><hr>
                <p>Look here for annoucements from OBCT</p>
            </div>
        </div>
    </div>

@endsection