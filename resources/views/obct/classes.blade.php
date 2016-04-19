@extends('layouts.master')

@section('title', 'Classes')

@section('content')

    <h2>Classes</h2>
    <div data-alert class="alert-box success radius">
        <h4>We will be updating our classes over the summer. <br>The 2016-2017 class schedule will be available after 6/1/2016.</h4>
    </div>
    @foreach($classes as $class)
        <div class="panel" id="classes">
            <h3>{{$class->class_name}}</h3>
            <p>{{$class->teaser}}</p><hr>
            <div class="row">
                <div class="small-7 columns">
                    {{$class->description}}
                </div>
                <div class="small-5 columns" id="classDetails">
                    <ul>
                        <li>{{$class->ages}}</li>
                        <li>{{$class->day}}</li>
                        <li>{{$class->time}}</li>
                    </ul>
                    <button class="button register"><a href="{{$class->link or 'Email Us'}}">Register</a></button>

                </div>
            </div>
        </div>

    @endforeach

@endsection
