@extends('layouts.master')

@section('title', 'Schools')

@section('content')

    <h2>OBCT in Schools</h2><hr>

    <div class="panel">
        <div class="row">
            <div class="medium-6 columns">
                <h2>Special Show</h2>
                <h4>Alice in Wonderland Jr</h4>
                <p>A special showing at Sweet Apple Elementary</p>
                <button class="button red"><a href="https://obct.yapsody.com/event/index/37356/saes-alice-in-wonderland">Buy Tickets</a></button>
            </div>
            <div class="medium-6 columns">
                <img src="img/alice.jpg">
            </div>
        </div>

    </div>

    @foreach($schoolPoints as $points)
        <h3><b>{{$points->point}}</b>:</h3> <p>{{$points->answer}}</p>
    @endforeach

    <hr>

    @foreach($schools as $school)
        <h3>School: </h3><p><b>{{$school->school}}</b></p>
        <h5>Location: </h5><p><b>{{$school->location}}</b></p>
        <p>{{$school->details}}</p>
    @endforeach
@endsection
