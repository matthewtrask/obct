@extends('layouts.master')

@section('title', 'Troupe')

@section('content')
    <h2>OBCT Troupe</h2><hr>

    <div class="container">
        <div class="row">
            <div class="small-12 medium-12 columns">
                <h2>About</h2>
                @foreach($aboutTroupe as $about)
                    <p>{{$about->about}}</p>
                @endforeach
            </div>
            <p>To get information about the auditions, click <br>
                <a href="{{ url('/auditions') }}"><button class="button large">Here</button></a></p>
        </div>
    </div>

@endsection
