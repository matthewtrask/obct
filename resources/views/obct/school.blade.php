@extends('layout.master')

@section('title', 'Schools')

@section('content')

    <h2>OBCT in Schools</h2>

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
