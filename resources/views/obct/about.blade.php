@extends('layout.master')

@section('title', 'About')

@section('content')

    <h2>About OBCT</h2><hr>

    <div class="row">
        @foreach($about as $item)
            <p>{{ $item->content }}</p><br>
        @endforeach
    </div>


    <img src="img/suess-alum.jpg" class="footerImage">
@endsection

