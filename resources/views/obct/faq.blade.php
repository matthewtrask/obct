@extends('layouts.master')

@section('title', 'FAQ')

@section('content')

    <h2>Frequently Asked Questions</h2>

    @foreach($faq as $question)
        <div class="panel">
            <h4>{{$question->question}}</h4>
            <p>{{$question->answer}}</p>
        </div>
    @endforeach
@endsection
