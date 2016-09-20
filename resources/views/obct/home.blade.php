@extends('layouts.master')

@section('title', 'Home')

@section('content')


    <div class="image" id="hero">
        <img src="img/little-mermaid-play.jpg" alt="OBCT Mermaid Group">
        <img src="img/green-logo.png" alt="Off Broadway Logo">
        <img src="img/island-show.jpg" alt="OBCT Island Show">
    </div>
    @foreach($alerts as $alert)
        @if($alert->active == 1)
            <div data-alert class="alert-box" id="alert">
                <h4>{{$alert->alert}}</h4>
                <a href="#" class="close">&times;</a>
            </div>
        @endif
    @endforeach

    <div class="panel" id="mission">
        <h2 class="text-center">Our Mission</h2>
        <p>We aim to connect children with their passions. We provide a safe place for children to explore their creative side in acting, singing and dancing.</p>
        <p>Through the various classes and productions, children will have the ability to try anything they want here at Off Broadway Children's Theatre.</p>
    </div>
    <div class="row">
        <div class="small-12 medium-6 columns">
            <div class="panel" id="auditions">
                <h4 class="text-center"><i class="fa fa-users" aria-hidden="true"></i> Auditions</h4>
                <p>We are always hosting auditions for various troupes and shows. Please check back often to check out the latest auditions!</p><br>
                <div class="row">
                    <div class="medium-12 medium-offset-3 columns">
                        <button class="button whatsnew"><a href="{{url('/auditions')}}">Click Here</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-12 medium-6 columns">
            <div class="panel" id="faq">
                <h4 class="text-center"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</h4>
                <p>There are a lot of questions we went ahead and answered for you! If you have a question we didnt answer, please send us an email and we will get it answered for you!</p>
                <div class="row">
                    <div class="medium-12 medium-offset-3 columns">
                        <button class="button whatsnew"><a href="{{url('/faq')}}">Click Here</a></button>
                    </div>
                </div>
            </div>
        </div>
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
