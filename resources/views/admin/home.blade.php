@extends('layouts.admin')

@section('title', 'Admin')

@section('content')



    <div class="row">

        <h2>Admin Panel</h2>

        <ul class="tabs" data-tab>
            <li class="tab-title active"><a href="#panel1">Email</a></li>
            <li class="tab-title"><a href="#panel2">Student Info</a></li>
            <li class="tab-title"><a href="#panel3">Tab 3</a></li>
            <li class="tab-title"><a href="#panel4">Tab 4</a></li>
        </ul>
        <div class="tabs-content">
            <div class="content active" id="panel1">
               <div class="row">
                   <div class="small-6 columns">
                       <p>Send a message</p>
                       <form method="POST" action="{{url('/messageOut')}}">

                       </form>
                   </div>

               </div>
            </div>
            <div class="content" id="panel2">
                <ul class="accordion" data-accordion>
                    <li class="accordion-navigation">
                        <a href="#panel1a">Accordion 1</a>
                        <div id="panel1a" class="content active">
                            Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </li>
                    <li class="accordion-navigation">
                        <a href="#panel2a">Accordion 2</a>
                        <div id="panel2a" class="content">
                            Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </li>
                    <li class="accordion-navigation">
                        <a href="#panel3a">Accordion 3</a>
                        <div id="panel3a" class="content">
                            Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </li>
                </ul>            </div>
            <div class="content" id="panel3">
                <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
            </div>
            <div class="content" id="panel4">
                <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
            </div>
        </div>


    </div>

@endsection
