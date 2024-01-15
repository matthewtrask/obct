@extends('layouts.master')

@section('title', 'Current Show')

@section('content')

    <h2>Current Show</h2><hr>

    @foreach($performances as $performance)
        @if($performance->active == 1)
        <div class="panel">
            <div class="row">
                <div class="small-6 columns">
                    <h3>{{$performance->title}}</h3>
                    <ul>
                        <li>Dates: {{$performance->dates}}</li>
                        <li>Price: ${{$performance->price}}</li>
                    </ul>
                    <p>{{$performance->description}}</p>
                </div>
                <div class="small-6 columns">
                    <img src="data:image/jpg;base64,{{$performance->show_image}}">
                </div>
            </div>

        </div>
        @endif
    @endforeach

    <hr>
    <h2>Upcoming shows</h2>
    <div class="row">
        @foreach($upcoming as $soon)
            <div class="small-6 columns">
                <div class="panel" id="upcoming">
                    <h4>{{ $soon->show_title }}</h4>
                    <p>Dates: {{$soon->dates}}</p>
                    <p>Price: ${{$soon->ticket_price}}</p>
                    <img height="300px" src="data:image/jpg;base64,{{$soon->show_image}}"><br>
                    <div class="panel">
                        {{ isset($soon->link) ? $soon->link : 'Tickets Available Soon!' }}
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
