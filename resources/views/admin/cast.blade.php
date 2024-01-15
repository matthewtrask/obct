@extends('layouts.admin')

@section('title', 'Cast')

@section('content')

    <div class="row admin">
        <div class="small-4 columns">
            <h2>Add Cast</h2><hr>
            @if (session('status'))
                <div data-alert class="alert-box">
                    {{ session('status') }}
                    <a href="#" class="close">&times;</a>
                </div>
            @endif

            @if (session('edit'))
                <div data-alert class="alert-box">
                    {{ session('status') }}
                    <a href="#" class="close">&times;</a>
                </div>
            @endif
            <form method="post" action="" id="cast" class="panel">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Student</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="student" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Role</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="role" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Cast</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="cast" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Show</label>
                            </div>
                            <div class="small-9 columns">
                                @foreach($shows as $show)
                                    <select title="show" name="show_id">
                                        <option>Select</option>
                                        <option value="{{$show->id}}">{{$show->show_title}}</option>
                                    </select>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-7 small-offset-1 columns">
                        <button class="button" id="cast" value="submit" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="small-8 columns" id="cast">
            <h2>Current Cast</h2><hr>
            @foreach($casts as $cast)
                <div class="row">
                    <div class="small-3 columns"><p>{{$cast->student}}</p></div>
                    <div class="small-2 columns"><p>{{$cast->role}}</p></div>
                    <div class="small-2 columns"><p>{{$cast->cast}}</p></div>
                    <div class="small-3 columns"><p>{{$cast->show_title}}</p></div>
                    <div class="small-2 columns">
                        <a href="#" data-reveal-id="cast_edit_{{$cast->cast_id}}" style="margin-right: 2%"><i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i></a>
                        <a href="#" data-reveal-id="cast_remove_{{$cast->cast_id}}" style="margin-left: 2%"><i class="fa fa-times fa-lg" aria-hidden="true"></i></a>
                    </div>
                </div><hr>
            @endforeach
        </div>
    </div>

    @foreach($casts as $cast)
        <div id="cast_edit_{{$cast->cast_id}}" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
            <h2 id="modalTitle">Edit Cast Member</h2>
            <form method="post" action="" id="editCast" class="panel">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="small-12 columns">
                        <div class="row hide-for-small-up">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Student Id</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="cast_id" value="{{$cast->cast_id}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Student</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="student" value="{{$cast->student}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Role</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="role" value="{{$cast->role}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Cast</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="cast" value="{{$cast->cast}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline">Show</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="cast" value="{{$cast->show_id}}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-8 small-offset-2 columns">
                        <button class="button" id="editCast" value="submit" name="submit">Submit</button>
                    </div>
                </div>
            </form>
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>

        <div id="cast_remove_{{$cast->cast_id}}" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
            <h2 id="modalTitle">Remove Cast Member.</h2>
            <p class="lead">Are you sure you want to remove:</p>
            <p>{{$cast->student}} | {{$cast->role}}</p>
            <button class="button" id="removeCast" value="submit" name="submit">Yes I want to remove them.</button>
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>
    @endforeach

    <script type="text/javascript">
        $(document).foundation();
    </script>

@endsection