@extends('layouts.admin')

@section('title', 'Schools')

@section('content')

    <div class="row">
        <div class="small-9 columns">
            <h2>Schools | Admin</h2>
        </div>
        <div class="small-3 columns">
            <button class="button red"><a href="#" data-reveal-id="school">Add School</a></button>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            @if (session('updated'))
                <div data-alert class="alert-box">
                    {{ session('updated') }}
                    <a href="#" class="close">&times;</a>
                </div>
            @endif
            @foreach($schools as $school)
                <div class="panel">
                    <div class="row">
                        <div class="small-9 columns">
                            <h4>{{$school->school}}</h4>
                        </div>
                        <div class="small-3 columns">
                            <p>{{$school->location}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-9 columns">
                            <p>{{$school->details}}</p>
                        </div>
                        <div class="small-3 columns">
                            <button class="button green"><a href="#">Edit</a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="school" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h2 id="modalTitle" class="text-center">Add a new school.</h2>
        <form method="post" id="addSchool" action="{{url('/admin/schools')}}">
            <div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">School Name</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="school" id="right-label" placeholder="School Name">
                        </div>
                    </div>
                </div>
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">School Location</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="location" id="right-label" placeholder="School Location">
                        </div>
                    </div>
                </div>
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">School Details</label>
                        </div>
                        <div class="small-9 columns">
                            <textarea rows="4" name="details" id="right-label" placeholder="School Details"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-offset-3 columns">
                    <button class="button" id="addSchool" value="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

@endsection