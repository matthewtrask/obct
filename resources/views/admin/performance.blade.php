@extends('layouts.admin')

@section('title', 'Performance Admin')

@section('content')

    <h2>Performances Management</h2><hr>

    <div class="row">
        <div class="medium-5 columns">
            <h4>Current Show Listing</h4>
            @foreach($performances as $performance)
                <div class="panel">
                    <div class="row">
                        <div class="small-9 columns">
                            <h4 id="title">{{$performance->title}}</h4>
                        </div>
                        <div class="small-3 columns">
                            @if($performance->active == 1)
                                <p><span style="margin-left:-20%" class="label alert">Current Show</span></p>
                            @else
                                <p><span style="margin-left:-20%" class="label warning">Upcoming</span></p>
                            @endif
                            @if($performance->auditions == 1)
                                <p><span style="margin-left:-20%" class="label success">Auditions</span></p>
                            @endif
                        </div>
                    </div>
                    <p>{{$performance->dates}}</p>
                    <p>{{$performance->link}}</p>
                </div>
            @endforeach
        </div>
        <div class="medium-7 columns">
            <h4>Add New Performance</h4>
            <div class="panel">
                <form method="post" action="{{url('/admin/')}}" id="addPerformance">
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="row">
                                <div class="small-3 columns">
                                    <label for="right-label" class="right inline">Performance Title</label>
                                </div>
                                <div class="small-9 columns">
                                    <input type="text" name="title" id="right-label" placeholder="Performance Title">
                                </div>
                            </div>
                        </div>
                        <div class="small-12 columns">
                            <div class="row">
                                <div class="small-3 columns">
                                    <label for="right-label" class="right inline">Performance Teaser</label>
                                </div>
                                <div class="small-9 columns">
                                    <input type="text" name="teaser" id="right-label" placeholder="Performance Title">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection