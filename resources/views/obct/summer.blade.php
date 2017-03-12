@extends('layouts.master')

@section('title', 'Summer Sessions')

@section('content')
    <h2>2017 Summer Sessions</h2>

    @foreach($summer as $show)
        <div class="row">
            <div class="small-12 medium-12 columns">
                <div class="panel">
                    <div class="row">
                        <div class="small-8 medium-8 columns">
                            <h4> {{ $show->show_title }} </h4>
                            <p>Camp Cost: ${{$show->cost}}</p>
                            <p>Description: {{ $show->show_info }}</p>
                            <img height="300px" width="300px" src="data:image/jpg;base64,{{ $show->show_image }}">
                        </div>
                        <div class="small-4 medium-4 columns">
                            <p>Show Dates: {{ $show->show_dates }} </p>
                            <p>Camp Dates: {{ $show->dates }} </p>
                            <p>Camp Times: {{ $show->time }}</p>
                            <div id="register">
                                <button class="button register expand"><a href="{{$show->show_link}}">Register</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
