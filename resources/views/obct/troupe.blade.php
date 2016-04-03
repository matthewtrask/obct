@extends('layouts.master')

@section('title', 'Troupe')

@section('content')
    <h2>OBCT Troupe</h2><hr>

    <div class="container">
        <div class="row">
            <div class="small-12 medium-5 columns">
                @foreach($troupeInfo as $info)
                    <div class="panel"><h4>{{$info->title}}</h4></div><hr>
                    <p>{{$info->point}}</p>
                @endforeach
            </div>
            <div class="small-12 medium-7 columns">
                <h2>About</h2>
                @foreach($aboutTroupe as $about)
                    <p>{{$about->about}}</p>
                @endforeach
            </div>
        </div>
    </div>

@endsection
