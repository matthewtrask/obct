@extends('layouts.master')


@section('title', 'Jr. Troupe')

@section('content')
    <div class="troupe">
        <h2>Junior Troupe</h2>

        <div class="row">
            <div class="small-5 columns">
                @foreach($troupeInfo as $info)
                    <div class="panel"><h4>{{$info->title}}</h4></div><hr>
                    <p>{{$info->point}}</p>
                @endforeach
            </div>
            <div class="small-7 columns">
                @foreach($jrTroupe as $info)
                    <p>{{$info->about}}</p>
                @endforeach
                <button class="button register"><a href="{{url('/troupe')}}">Troupe</a></button>
            </div>
        </div>

    </div>
@endsection

