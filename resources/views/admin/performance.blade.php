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
                @if($performance->active == 1)
                    <div class="panel">
                        <div class="row">
                            <div class="small-4 columns">
                                <h4 id="title">{{$performance->title}}</h4>
                            </div>
                            <div class="small-2 columns">
                                @if($performance->active == 1)
                                    <p><span style="margin-left:-20%" class="label alert">Current Show</span></p>
                                @endif
                                @if($performance->upcoming == 1)
                                    <p><span style="margin-left:-20%" class="label warning">Upcoming</span></p>
                                @endif
                                @if($performance->auditions == 1)
                                    <p><span style="margin-left:-20%" class="label success">Auditions</span></p>
                                @endif
                                @if($performance->past == 1)
                                    <p><span style="margin-left:-20%" class="label info">Past</span></p>
                                @endif
                            </div>
                            <div class="small-2 columns">

                            </div>
                            <div class="small-4 columns" id="actions">
                                <button class="red button" id="edit" value="{{$performance->id}}">Edit</button>
                                <button class="gray button" id="delete" value="{{$performance->id}}">Delete</button>
                            </div>


                        </div>
                        <p>{{$performance->dates}}</p>
                        <p><a href="{{$performance->link}}">Tickets</a></p>
                        <div id="perfId">
                            <img src="data:image/jpg;base64,{{$performance->show_image}}">
                        </div>
                    </div>
                    @elseif($performance->upcoming == 1)
                        <div class="panel">
                            <div class="row">
                                <div class="small-4 columns">
                                    <h4 id="title">{{$performance->title}}</h4>
                                </div>
                                <div class="small-2 columns">
                                    @if($performance->active == 1)
                                        <p><span style="margin-left:-20%" class="label alert">Current Show</span></p>
                                    @endif
                                    @if($performance->upcoming == 1)
                                        <p><span style="margin-left:-20%" class="label warning">Upcoming</span></p>
                                    @endif
                                    @if($performance->auditions == 1)
                                        <p><span style="margin-left:-20%" class="label success">Auditions</span></p>
                                    @endif
                                    @if($performance->past == 1)
                                        <p><span style="margin-left:-20%" class="label info">Past</span></p>
                                    @endif
                                </div>
                                <div class="small-2 columns">

                                </div>
                                <div class="small-4 columns" id="actions">
                                    <button class="red button" id="edit" value="{{$performance->id}}">Edit</button>
                                    <button class="gray button" id="delete" value="{{$performance->id}}">Delete</button>
                                </div>


                            </div>
                            <p>{{$performance->dates}}</p>
                            <p><a href="{{$performance->link}}">Tickets</a></p>
                            <div id="perfId">
                                <img src="data:image/jpg;base64,{{$performance->show_image}}">
                            </div>
                        </div>
                    @elseif($performance->auditions == 1)
                        <div class="panel">
                            <div class="row">
                                <div class="small-4 columns">
                                    <h4 id="title">{{$performance->title}}</h4>
                                </div>
                                <div class="small-2 columns">
                                    @if($performance->active == 1)
                                        <p><span style="margin-left:-20%" class="label alert">Current Show</span></p>
                                    @endif
                                    @if($performance->upcoming == 1)
                                        <p><span style="margin-left:-20%" class="label warning">Upcoming</span></p>
                                    @endif
                                    @if($performance->auditions == 1)
                                        <p><span style="margin-left:-20%" class="label success">Auditions</span></p>
                                    @endif
                                    @if($performance->past == 1)
                                        <p><span style="margin-left:-20%" class="label info">Past</span></p>
                                    @endif
                                </div>
                                <div class="small-2 columns">

                                </div>
                                <div class="small-4 columns" id="actions">
                                    <button class="red button" id="edit" value="{{$performance->id}}">Edit</button>
                                    <button class="gray button" id="delete" value="{{$performance->id}}">Delete</button>
                                </div>


                            </div>
                            <p>{{$performance->dates}}</p>
                            <p><a href="{{$performance->link}}">Tickets</a></p>
                            <div id="perfId">
                                <img src="data:image/jpg;base64,{{$performance->show_image}}">
                            </div>
                        </div>
                    @endif
                    @if($performance->past == 1)
                        <div class="panel">
                            <div class="row">
                                <div class="small-4 columns">
                                    <h4 id="title">{{$performance->title}}</h4>
                                </div>
                                <div class="small-2 columns">
                                    @if($performance->active == 1)
                                        <p><span style="margin-left:-20%" class="label alert">Current Show</span></p>
                                    @endif
                                    @if($performance->upcoming == 1)
                                        <p><span style="margin-left:-20%" class="label warning">Upcoming</span></p>
                                    @endif
                                    @if($performance->auditions == 1)
                                        <p><span style="margin-left:-20%" class="label success">Auditions</span></p>
                                    @endif
                                    @if($performance->past == 1)
                                        <p><span style="margin-left:-20%" class="label info">Past</span></p>
                                    @endif
                                </div>
                                <div class="small-2 columns">

                                </div>
                                <div class="small-4 columns" id="actions">
                                    <button class="red button" id="edit" value="{{$performance->id}}">Edit</button>
                                    <button class="gray button" id="delete" value="{{$performance->id}}">Delete</button>
                                </div>


                            </div>
                            <p>{{$performance->dates}}</p>
                            <p><a href="{{$performance->link}}">Tickets</a></p>
                            <div id="perfId">
                                <img src="data:image/jpg;base64,{{$performance->show_image}}">
                            </div>
                        </div>
                    @endif
            @endforeach
        </div>
    </div>

    <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Add New Performance</h2>
        <div class="panel">
            <form method="post" enctype="multipart/form-data" action="{{url('/admin/newPerformance')}}" id="addPerformance">
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
                                <textarea rows="5" type="text" name="description" id="right-label" placeholder="Performance Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Dates</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="dates" id="right-label" placeholder="Performance Dates" />
                            </div>
                        </div>
                    </div>
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Prices</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="price" id="right-label" placeholder="Performance Prices" />
                            </div>
                        </div>
                    </div>
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Ticket Link</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="link" id="right-label" placeholder="Performance Ticket Link" />
                            </div>
                        </div>
                    </div>
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Performance Image</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="file" name="image" id="fileToUpload">
                            </div>
                        </div>
                    </div>
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Performance Status</label>
                            </div>
                            <div class="small-9 columns">
                                <input name="active" type="radio" value="1"><label for="active">Current</label>
                                <input name="upcoming" type="radio" value="1"><label for="upcoming">Upcoming</label>
                                <input name="auditions" type="radio" value="1"><label for="auditions">Auditions</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-7 small-offset-3 columns">
                        <button class="button red" id="addPerformance" value="submit" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

@endsection