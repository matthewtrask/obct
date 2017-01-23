@extends('layouts.admin')


@section('title', 'Box Office')

@section('content')
    <div class="row">
        <div class="small-9">
            <h2>Box Office</h2>
        </div>
        <div class="small-3">
            <p>Current Show: {{ $show }}</p>
        </div>
    </div>
@endsection