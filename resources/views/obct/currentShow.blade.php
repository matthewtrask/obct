@extends('layout.master')

@section('title', 'Current Show')

@section('content')

    <h2>Current Show</h2>

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

    <hr>
    <h2>Upcoming shows</h2>
    <div class="row">
        @foreach($upcoming as $soon)
            <div class="small-6 columns">
                <div class="panel">
                    <h4>{{ $soon->show_title }}</h4>
                    <p>Dates: {{$soon->dates}}</p>
                    <p>Price: ${{$soon->ticket_price}}</p>
                    <img src="data:image/jpg;base64,{{$soon->show_image}}">
                </div>
            </div>
        @endforeach

    </div>

@endsection
