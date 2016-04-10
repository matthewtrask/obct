@extends('layouts.master')

@section('title', 'Current Show')

@section('content')

    <h2>Current Show</h2><hr>

    @foreach($currentShow as $show)
        <div class="panel">
            <div class="row">
                <div class="small-6 columns">
                    <h3>{{$show->show_title}}</h3>
                    <ul>
                        <li>Dates: {{$show->dates}}</li>
                        <li>Price: ${{$show->price}}</li>
                    </ul>
                    <p>{{$show->description}}</p>
                    <a href="{{$show->link}}"><button class="button show">Buy Now!</button></a>
                </div>
                <div class="small-6 columns">
                    <img src="data:image/jpg;base64,{{$show->show_image}}">
                </div>
            </div>

        </div>
    @endforeach

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
