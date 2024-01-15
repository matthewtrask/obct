@extends('layouts.master')

@section('title', 'Teachers')

@section('content')
    <h2>Teachers</h2>

    @foreach($teachers as $teacher)
        <div class="panel">
            <h4>{{$teacher->name}}</h4>
            <div class="row">
                <div class="small-7 columns">
                    <p>{{ $teacher->about }}</p>
                </div>
                <div class="small-5 columns" id="teachers">
                    <img src="data:image/jpg;base64,{{$teacher->image}}">
                </div>
            </div>
        </div>
    @endforeach

@endsection
