@extends('layouts.master')

@section('title', 'Classes')

@section('content')

    <h2>Classes</h2>

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
