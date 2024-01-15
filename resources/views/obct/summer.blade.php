@extends('layouts.master')

@section('title', 'Summer Sessions')

@section('content')
    <h2>{{date('Y')}} Summer Sessions</h2>

    @foreach($summer as $show)
        <div class="row">
            <div class="small-12 medium-12 columns">
                <div class="panel">
                    <div class="row">
                        <div class="small-8 medium-8 columns">
                            <h4> {{ $show->show_title }} </h4>
                            <br>
                            <img height="300px" width="300px" src="{{ $show->show_image }}">
                            <br><br>
                            <p><b>Description</b>: {!! $show->show_info !!}</p>
                        </div>
                        <div class="small-4 medium-4 columns">
                            <p><b>Camp Cost</b>: ${{$show->cost}}</p>
                            <p><b>Show Dates</b>: {{ $show->show_dates }} </p>
                            <p><b>Camp Dates</b>: {{ $show->dates }} </p>
                            <p><b>Camp Times</b>: {{ $show->time }}</p>
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
