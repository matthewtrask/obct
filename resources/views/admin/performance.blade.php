@extends('layouts.admin')

@section('title', 'Performance Admin')

@section('content')



    <div class="row">
        <div class="small-9 columns">
            <h2>Performances Management</h2>
        </div>
        <div class="small-3 columns" id="addPerformance">
            <button class="button red"><a href="#" data-reveal-id="myModal">Add Performance</a></button>
        </div>
    </div>


    <div class="row">
        <div class="medium-12 columns">
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
    </div>



    <div class="medium-12 columns">
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
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Performance Description</label>
                            </div>
                            <div class="small-9 columns">
                                <textarea rows="5" type="text" name="teaser" id="right-label" placeholder="Performance Title"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Add New Performance</h2>
        <p class="lead">Your couch.  It is mine.</p>
        <div class="medium-12 columns">
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
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

@endsection