@extends('layouts.master')


@section('title', 'Jr. Troupe')

@section('content')
    <div class="troupe">
        <h2>Junior Troupe</h2>

        @foreach($jrTroupe as $info)
            <p>{{$info->about}}</p>
        @endforeach
        <button class="button register"><a href="{{url('/troupe')}}">Troupe</a></button>
    </div>
@endsection

