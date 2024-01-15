@extends('layouts.master')

@section('title', 'About')

@section('content')

    <h2>About OBCT</h2><hr>

    <div class="row">
        @foreach($about as $item)
            <p>{{ $item->content }}</p><br>
        @endforeach
    </div>


    <img src="https://obct.nyc3.cdn.digitaloceanspaces.com/suess-alum.jpg" class="Dr. Suess cast">
@endsection

