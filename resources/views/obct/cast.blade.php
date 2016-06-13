@extends('layouts.master')

@section('title', 'Show Cast')


@section('content')

    <div class="row">
        <div class="small-12 columns">
            <h2>OBCT Cast Listing</h2>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <div class="row">
                <div class="small-3 columns">
                    <p><b>Student</b></p>
                </div>
                <div class="small-3 columns">
                    <p><b>Role</b></p>
                </div>
                <div class="small-3 columns">
                    <p><b>Show</b></p>
                </div>
                <div class="small-3 columns">
                    <p><b>Cast</b></p>
                </div>
            </div>
            @foreach($showCast as $cast)
                <div class="row">
                    <div class="small-3 columns">
                        <p>{{$cast->student}}</p>
                    </div>
                    <div class="small-3 columns">
                        <p>{{$cast->role}}</p>
                    </div>
                    <div class="small-3 columns">
                        <p>{{$cast->show_title}}</p>
                    </div>
                    <div class="small-3 columns">
                        <p>{{$cast->cast}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection