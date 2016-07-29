@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
        <div class="small-3 columns">
            <div class="panel">
                <h2>Pages</h2>
            </div>
            <ul class="side-nav">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
            </ul>
        </div>
        <div class="small-3 columns" id="sidenav">
            <div class="panel">
                <h2>Stats</h2>
            </div>
            <div class="panel">
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Messages: #</p>
            </div>
            <div class="panel">
                <p><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook: #</p>
            </div>
            <div class="panel">
                <p><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter: #</p>
            </div>
            <div class="panel">
                <p><i class="fa fa-users" aria-hidden="true"></i> Registered Students: #</p>
            </div>
            <div class="panel">
                <p><i class="fa fa-graduation-cap" aria-hidden="true"></i> Classes: {{$classes}}</p>
            </div>
        </div>
        <div class="small-6 columns" id="mainnav">
            @if (session('updated'))
                <div data-alert class="alert-box">
                    {{ session('updated') }}
                    <a href="#" class="close">&times;</a>
                </div>
            @endif
            <div class="panel">
                <h2>Whats New</h2>
            </div>
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


@endsection
