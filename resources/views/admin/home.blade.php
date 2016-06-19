@extends('layouts.admin')

@section('title', 'Admin')

@section('content')



    <div class="row">

        <h2>Admin Panel</h2><hr>
        <div class="small-6 columns" id="sidenav">

        </div>
        <div class="small-6 columns" id="mainnav">
            @if (session('updated'))
                <div data-alert class="alert-box">
                    {{ session('updated') }}
                    <a href="#" class="close">&times;</a>
                </div>
            @endif
            <div class="panel">
                <form method="POST" action="{{url('/admin/whatsNew')}}" id="whatsNew">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Title
                                <input type="text" name="title" placeholder="Title" />
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Message
                                <textarea rows="5" name="message" placeholder="Message"></textarea>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Select Page
                                <select name="page">
                                    <option>Pick a Page</option>
                                    <option value="about">About</option>
                                    <option value="classes">Classes</option>
                                    <option value="teachers">Teachers</option>
                                    <option value="summer">Summer</option>
                                    <option value="schools">Schools</option>
                                    <option value="currentshow">Current Show</option>
                                    <option value="cast">Cast</option>
                                    <option value="auditions">Auditions</option>
                                    <option value="troupe">Troupe</option>
                                    <option value="jrtroupe">Jr. Troupe</option>
                                    <option value="faq">FAQ</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns">
                            <button class="button" type="submit" id="whatsNew">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>

@endsection
