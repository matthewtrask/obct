@extends('layouts.master')

@section('title', 'Auditions')

@section('content')

    <h2>Auditions</h2><hr>

    <h4>OBCT Show Auditions</h4>
    <p><i class="fa fa-asterisk"></i> <em>Check back often to see new auditions</em></p>
    @foreach($auditions as $audition)
        <div class="panel">
            <h3>{{$audition->title}}</h3>
            <p>{{$audition->teaser}}</p>
            <div class="row">
                <div class="small-6 columns">
                    <p>Show Dates: {{$audition->dates}}</p>
                    <p>Audition Dates: {{$audition->audition_dates}}</p>
                    <img src="data:image/jpg;base64,{{$audition->show_image}}">
                </div>
                <div class="small-6 columns">
                    <p>{{$audition->description}}</p>
                </div>
            </div>
        </div>
    @endforeach

    <h4>OBCT Troupe Auditions</h4>

    @foreach($troupeAuditions as $troupe)
        <a href="#" data-reveal-id="troupe_{{$troupe->id}}">
            <div class="panel">
                <h3>{{$troupe->title}}</h3>
                <p>Click to see more</p>
            </div>
        </a>

        <div id="troupe_{{$troupe->id}}" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
            <h2>{{$troupe->title}}</h2>
            <div class="row">
                <div class="small-6 columns">
                    <p>Date: {{$troupe->dates}}</p>
                    <p>Time: {{$troupe->times}}</p>
                </div>
                <div class="small-6 columns">
                    <p>Callback Date: {{$troupe->callbacks}}</p>
                    <p>Callback Time: {{$troupe->callback_times}}</p>
                </div>
            </div><br>
            <p>{{$troupe->info}}</p>
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>

        </div>
    @endforeach



@endsection
