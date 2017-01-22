@extends('layouts.admin')

@section('title', 'Summer Program')

@section('content')

    @foreach($summerShows as $show)
        <div class="row">
            <div class="small-9 columns">
                <h2>Summer Program</h2>
            </div>
            <div class="small-3 columns add">
                <button class="button red"><a href="#" data-reveal-id="addModal">Add Summer Program</a></button>
            </div>
        </div>

        <div class="row">
            <div class="small-12 medium-12 columns">
                <div class="panel">
                    <div class="row">
                        <div class="small-9 medium-9 columns">
                            <h4> {{ $show->show_title }} </h4>
                            <p>Camp Cost: ${{$show->cost}}</p>
                            <p>Description: {{ $show->show_info }}</p>
                            <img height="300px" width="300px" src="data:image/jpg;base64,{{ $show->show_image }}">
                        </div>
                        <div class="small-3 medium-3 columns">
                            <p>Show Dates: {{ $show->show_dates }} </p>
                            <p>Camp Dates: {{ $show->dates }} </p>
                            <p>Camp Times: {{ $show->time }}</p>
                            <button class="button red" id="summer_{{ $show->id }}" value="{{ $show->id }}">Edit</button>
                            <button class="button gray" id="summer_{{ $show->id }}" value="{{ $show->id }}">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

    <div id="addModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <form method="post" enctype="multipart/form-data" action="{{url('/')}}/admin/summer" id="addCamp">
            <h4 class="text-center">Add New Summer Program</h4>
            <div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Camp Title</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="show_title" id="right-label" placeholder="Camp Title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Ages</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="ages" id="right-label" placeholder="Appropriate Ages">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Camp Dates</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="dates" id="right-label" placeholder="Camp Dates">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Camp Times</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="time" id="right-label" placeholder="Camp Times">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Camp Cost</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="cost" id="right-label" placeholder="Camp Cost (do not include $)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Camp Show Times</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="show_times" id="right-label" placeholder="Camp Show Times">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Camp Tickets Link</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="show_link" id="right-label" placeholder="Camp Tickets Link">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Camp Description</label>
                        </div>
                        <div class="small-9 columns">
                            <textarea name="show_info" rows="4" id="right-label" placeholder="Camp Description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Camp Image</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="file" name="image" id="fileToUpload">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <label for="right-label" class="right inline">Active Camp?</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="checkbox" value="true" name="active">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-7 small-offset-3 columns">
                            <button class="button red" id="addCamp" value="submit" name="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

@endsection