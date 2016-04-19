@extends('layouts.master')

@section('title', 'Summer Sessions')

@section('content')
    <h2>Summer Sessions</h2>

    @foreach($summerInfo as $info)
        <p>{{ $info->details }}</p>
    @endforeach


    <dl class="panel" id="summerShows">
        <dt>Select:</dt>
        <dd><a href="#1">Elf Jr.</a></dd>
        <dd><a href="#2">Aladdin Kids</a></dd>
        <dd><a href="#3">High School Musical And More</a></dd>
        <dd><a href="#4">Cirque Du Off Broadway</a></dd>
    </dl>


    @foreach($summer as $session)
        <div class="panel" id="{{$session->id}}">
            <h3>{{$session->show_title}}</h3>
            <div class="row">
                <div class="small-6 columns">
                    <div id="overflow">
                        <p>{{$session->show_info}}</p>
                    </div><br>
                    <p><b>Ages</b>: {{$session->ages}}</p>
                    <p><b>Dates</b>: {{$session->dates}}</p>
                    <p><b>Times</b>: {{$session->time}}</p>
                    <p><b>Cost</b>: ${{$session->cost}}</p>
                    <p><b>Show Dates</b>: {{$session->show_dates}}</p>
                </div>
                <div class="small-6 columns" id="register">
                    <img src="data:image/jpg;base64,{{$session->show_image}}"><b3r><br>
                    <p>To register for a summer session:</p>
                        <a href="https://app.jackrabbitclass.com/reg.asp?id=277946"><button class="button register expand">Register</button></a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
