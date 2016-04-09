@extends('layouts.master')

@section('title', 'Auditions')

@section('content')

    <h2>Auditions</h2><hr>

    <h4>OBCT Show Auditions</h4>
    <p><i class="fa fa-asterisk"></i> <em>Check back often to see new auditions</em></p>
    @foreach($auditions as $audition)
        <a href="#" data-reveal-id="audition_{{$audition->id}}">
            <div class="panel">
                <h3>{{$audition->show_title}}</h3>
                <p>{{$audition->show_teaser}}</p>
                <p>Click to see more</p>
            </div>
        </a>

        <div id="audition_{{$audition->id}}" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
            <h2 id="modalTitle">{{$audition->show_title}}</h2>
            <p class="lead">{{$audition->show_teaser}}</p>
            <div class="row">
                <div class="small-6 columns">
                    <p>Show Dates: {{$audition->show_dates}}</p>
                    <p>Audition Dates: {{$audition->audition_dates}}</p>
                    <p>Audition Times: {{$audition->audition_times}}</p>
                    <img src="data:image/jpg;base64,{{$audition->show_image}}">
                </div>
                <div class="small-6 columns">
                    <p>{{$audition->show_info_one}}</p>
                    <p>{{$audition->show_info_two}}</p>
                </div>
            </div>
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
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
