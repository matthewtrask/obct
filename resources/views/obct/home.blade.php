@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="image" id="hero">
        <img src="img/little-mermaid-play.jpg" alt="OBCT Mermaid Group">
        <img src="img/green-logo.png" alt="Off Broadway Logo">
        <img src="img/island-show.jpg" alt="OBCT Island Show">
    </div>
    <div class="panel" id="mission">
        <h2 class="text-center">Our Mission</h2>
        <p>We aim to connect children with their passions. We provide a safe place for children to explore their creative side in acting, singing and dancing.</p>
        <p>Through the various classes and productions, children will have the ability to try anything they want here at Off Broadway Children's Theatre.</p>
    </div>
    <div class="panel" id="whatsNew">
        <h2 class="text-center">Whats New @ OBCT</h2><hr>
        @foreach($whatsNew as $whatNew)
            <h4>{{ $whatNew->title }}</h4>
            <p>{{ $whatNew->content }}</p>
            <button class="button whatsnew"><a href="{{ $whatNew->button }}">Click Here</a></button><hr>
        @endforeach
    </div>
@endsection
